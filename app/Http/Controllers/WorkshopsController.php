<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
        $workshops_list = Workshop::all();
        return view('handbook.workshop.index', ['workshops_list' => $workshops_list]);
    }

    public function create()
    {
        return view('handbook.workshop.form');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect()->route('workshops.index');
    }
}
