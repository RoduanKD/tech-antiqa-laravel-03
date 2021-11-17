<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
        $roles = Role::all();
        return view('users.create', ['roles' => $roles]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|min:10|max:55',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|numeric|min:8',
            'birthdate' => 'required|date',
            'password'  => 'required',
            'role_id'   => 'required'

        ]);
        $user = new User();
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->password  = $request->password;
        $user->save();
        return redirect()->route('users.index', $user);
    }


    public function edit(User $user, Role $role)
    {
        return view('users.edit', ['user' => $user, 'role' => $role]);
    }


    public function update(User $user, Role $role, Request $request)
    {
        $request->validate([
            'name'      => 'required|string|min:10|max:55',
            'email'     => 'required|email',
            'phone'     => 'required|numeric|min:8',
            'birthdate' => 'required|date',
            'password'  => 'required',
            ''

        ]);
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->password  = $request->password;
        $role->role_id   = $request->role_id;
        $user->save();
        return redirect()->back()->with('Profile successfully updated.');
    }

    public function show(User $user)
    {
        // return view('/');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
