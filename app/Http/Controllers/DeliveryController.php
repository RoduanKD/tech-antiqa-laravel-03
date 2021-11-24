<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCompany;

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
/*public function index(DeliveryCompany $delivery_company)
    {
        $delivery_company = DeliveryCompany::all();
        return view('admin.dashbord.delivery',['delivery'=>$delivery_company]);
    }
}*/
