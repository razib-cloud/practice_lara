<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => "sallu", 'address' => "lalbagh"],
            ['id' => 2, 'name' => "john", 'address' => "mirpur"],
            ['id' => 3, 'name' => "doe", 'address' => "dhanmondi"],
            ['id' => 4, 'name' => "jane", 'address' => "gulshan"],
            ['id' => 5, 'name' => "alex", 'address' => "banani"],
        ];

        return view('role.index', compact('users'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "department" => "required|in:Hr,Development"
        ], [
            'name.required' => "The name field must be filled out.",
            'department.required' => "The department field must be filled out.",
            'department.in' => "The department must be either Hr or Development."
        ]);

        

        // Here you would typically save the data to the database
        // For example: User::create($request->all());

        // Flash a success message to the session
        Session::flash('success', 'User created successfully!');

        // Redirect to the index page
        // return redirect("roles")->with("success","Data saved successfully");
    }

    public function update()
    {
        return view('role.update');
    }




}
