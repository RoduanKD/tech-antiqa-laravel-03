<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:10|max:55',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:8',
            'birthdate' => 'required|date',
            'password' => 'required|password',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->password = $request->password;
        $user->save();
        return view('users.index');
    }


    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }


    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:10|max:55',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:8',
            'birthdate' => 'required|date',
            'password' => 'required|password',

        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->password = $request->password;
        $user->save();
        return redirect()->view('users.index');
    }

    public function show(User $user)
    {
        // return view('/');
    }
}
