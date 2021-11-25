<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCompany;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $delivery = DeliveryCompany::create([
            'name' => ['en' => $request->name]
        ]);
    }
}
/*public function index(DeliveryCompany $delivery_company)
    {
        $delivery_company = DeliveryCompany::all();
        return view('admin.dashbord.delivery',['delivery'=>$delivery_company]);
    }
}*/
