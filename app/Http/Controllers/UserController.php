<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Propaganistas\LaravelPhone\PhoneNumber;
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
        $this->authorize('viewAny', User::class);
        return view('users.index', ['users' => $model->paginate(15)]);
    }


    public function create()
    {
        $this->authorize('create', User::class);
        $roles = Role::whereName('supervisor')->orWhere('name', 'delivery-company')->get();
        return view('users.create', ['roles' => $roles]);
    }


    public function store(Request $request)
    {
        $this->authorize('create', User::class);
        $request->validate([
            'name'      => 'required|string|min:10|max:55',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|phone:AUTO,KSA',
            'birthdate' => 'required|date',
            'password'  => 'required',
            'role_id'   => 'required'

        ]);
        $user = new User();
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->phone     = (string) PhoneNumber::make($request->phone);
        $user->birthdate = $request->birthdate;
        $user->password  = $request->password;
        $user->assignRole($request->role_id);
        $user->save();
        return redirect()->route('users.index', $user);
    }


    public function edit(User $user)
    {
        $this->authorize('update', $user);
        $roles = Role::whereName('supervisor')->orWhere('name', 'delivery-company')->get();
        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }


    public function update(User $user, Request $request)
    {
        $this->authorize('update', $user);
        $request->validate([
            'name'      => 'required|string|min:10|max:55',
            'email'     => 'required|email',
            'phone'     => 'required|numeric|min:8',
            'birthdate' => 'required|date',
            'password'  => 'required',
            'role_id'   => 'required|exists:roles,id',

        ]);
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->password  = $request->password;
        $user->assignRole($request->role_id);
        $user->save();
        return redirect()->back()->with('Profile successfully updated.');
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);
        $cart = Cart::all();
        $cart = $cart->products;
        return view('users.show', ['user' => $user, 'cart' => $cart]);
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return redirect()->back();
    }
}
