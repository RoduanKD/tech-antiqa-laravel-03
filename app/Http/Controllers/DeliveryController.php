<?php

use App\Http\Controllers\Controller;

class DelivaryController extends Controller
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
