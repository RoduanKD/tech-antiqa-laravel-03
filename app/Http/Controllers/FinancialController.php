<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FinancialController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.Fin.financial');
    }
}
