<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        var_dump[111];
        return view('hello');
    }

    public function test()
    {
        return view('test');
    }
}