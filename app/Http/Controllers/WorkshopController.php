<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkshopRequest;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops_list = Workshop::orderBy('name', 'ASC')->get();
        return view('handbook.workshop.index', ['workshops_list' => $workshops_list]);
    }

    public function create()
    {
        return view('handbook.workshop.create');
    }

    public function store(WorkshopRequest $request)
    {
        $date = $request->except('_token');
        Workshop::create($date);
        return redirect()->route('workshops.index');
    }

    public function edit($id)
    {
        $date = Workshop::find($id);
        return view('handbook.workshop.edit', ['workshop' => $date]);
    }

    public function update(WorkshopRequest $request, $id)
    {
        $date = $request->except('_token', '_method');
        $workshop = Workshop::find($id);
        $workshop->update($date);
        return redirect()->route('workshops.index');
    }

    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect()->route('workshops.index');
    }
}
