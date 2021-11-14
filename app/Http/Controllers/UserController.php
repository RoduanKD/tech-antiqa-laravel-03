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
    public function index(User $user)
    {
        return view('users.index', ['users' => $user]);
    }
    public function create(User $user)
    {
        return view('users.create', ['user' => $user]);
    }
    public function insert(Request $request)
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
    public function edit(Type $var = null)
    {
        # code...
    }
    public function update(Type $var = null)
    {
        # code...
    }
}
