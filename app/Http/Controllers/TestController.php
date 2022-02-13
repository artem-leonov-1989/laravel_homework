<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workshop;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test()
    {
        $equipments = Workshop::find(1);
        return view('test.test', ['equipments' => $equipments->equipments]);
    }
}
