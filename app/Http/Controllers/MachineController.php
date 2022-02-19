<?php

namespace App\Http\Controllers;

use App\Http\Requests\MachineRequest;
use App\Models\Machine;
use App\Models\Workshop;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index()
    {
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
        Machine::create($date);
        return redirect()->route('machines.index');
    }
}
