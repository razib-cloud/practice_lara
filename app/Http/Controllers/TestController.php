<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($id="",$name="")
    {

        return view('test.index', compact('id', 'name'));

    }

    
}
