<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashbord.delivery');
    }
}
