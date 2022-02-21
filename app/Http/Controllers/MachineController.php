<?php

namespace App\Http\Controllers;

use App\Http\Requests\MachineRequest;
use App\Models\Machine;
use App\Models\Workshop;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('old_machine_id')) {
            $request->session()->forget('old_machine_id');
        }
        $machines_list = Machine::paginate(10);
        return view('handbook.machine.index', ['machines_list' => $machines_list]);
    }

    public function destroy($id)
    {
        $machine = Machine::find($id);
        $machine->delete();
        return redirect()->route('machines.index');
    }

    public function create()
    {
        $workshops_list = Workshop::all();
        return view('handbook.machine.create', ['workshops_list' => $workshops_list]);
    }

    public function store(MachineRequest $request)
    {
        $date = $request->except('_token');
        $machine_isset = Machine::find($date['id']);
        if (!isset($machine_isset))
        {
            Machine::create($date);
            return redirect()->route('machines.index');
        } else {
            return redirect()->route('machines.create')->withErrors(['save_error' => 'Станок с таким инвентарным уже существует!!!']);
        }
    }

    public function edit(Request $request, $id)
    {
        $machine = Machine::find($id);
        $workshops_list = Workshop::all();
        $request->session()->put('old_machine_id', $machine->id);
        return view('handbook.machine.edit', ['machine' => $machine, 'workshops_list' => $workshops_list]);
    }

    public function update(MachineRequest $request, $id)
    {
        $date = $request->except('_token', '_method');
        $old_id = $request->session()->get('old_machine_id');
        if ($id == $old_id)
        {
            $machine = Machine::find($id);
            if ($date['id'] == $old_id)
            {
                $machine->update($date);
                return redirect()->route('machines.index');
            } else {
                $machine_isset = Machine::find($date['id']);
                if (!isset($machine_isset))
                {
                    $machine->update($date);
                    $request->session()->forget('old_machine_id');
                    return redirect()->route('machines.index');
                } else {
                    return redirect()->route('machines.edit', ['id' => $id])->withErrors(['save_error' => 'Станок с таким инвентарным уже существует!!!']);
                }
            }
        } else {
            echo 'Мамкин программист :)';
        }
    }

    public function search(Request $request)
    {
        $machine = Machine::find($request->search);
        return view('handbook.machine.index', ['machines_list' => $machine]);
    }
}
