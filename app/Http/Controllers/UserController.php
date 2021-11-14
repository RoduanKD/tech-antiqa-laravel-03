<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
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
        return view('users.create', [['users' => $user]]);
    }
    public function insert(Type $var = null)
    {
        # code...
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
