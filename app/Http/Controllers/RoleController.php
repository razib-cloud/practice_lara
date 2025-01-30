<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index(){

        $users=[
            ['id'=>1, 'name'=>"sallu", 'address'=>"lalbagh"],
            ['id'=>1, 'name'=>"sallu", 'address'=>"lalbagh"],
            ['id'=>1, 'name'=>"sallu", 'address'=>"lalbagh"],
            ['id'=>1, 'name'=>"sallu", 'address'=>"lalbagh"],
            ['id'=>1, 'name'=>"sallu", 'address'=>"lalbagh"],

        ];
        return view('role.index', compact('users'));


    }


    function create(){
        return view('role.create');
    }

    function store(Request $request){
    // echo $request->name;
    // echo $request->department;


    $request->validate([
        "name"=>"required|min:3",
        "department"=>"required|in: Hr, Development"
    ],[
        'name.required'=>"The name field is must be fillup"
    ]);


    }

    function update(){
        return view('role.update');
    }
}
