<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        return User::create($request->all());


        // User::create([
        //     'name' => $request->name,
        //     'staff_id' => $request->staff_id_2,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        // dd($request->all());
    }

}
