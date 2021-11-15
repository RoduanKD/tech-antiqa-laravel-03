<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Delivery_company;

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
/*public function index(Delivery_company $delivery_company)
    {
        $delivery_company = Delivery_company::all();
        return view('admin.dashbord.delivery',['delivery'=>$delivery_company]);
    }
}*/

