<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();

        // $users = User::limit(3)->get();

        $users = User::
        // where('staff_id', '99999')
            select('*')
            // ->where('id', '>', 1)
            // ->where('id', '<' , 4)
            ->get();


        return view('user.index', [
            'users' => $users
        ]);
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

    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'staff_id' => 'unique:users,staff_id,'.$user->id.',id'
        ], [
            'staff_id.unique'
        ]);

        # 1
        $user->update($request->all());

        # 2
        // $user->staff_id = $request->staff_id;
        // $user->save();

        // # 3
        // $user->update([
        //     'staff_id' => $request->staff_id
        // ]);

        return redirect()->route('user.index');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->user_id);
        $user->delete();

        return redirect()->route('user.index');
    }

}
