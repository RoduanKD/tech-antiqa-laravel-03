<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCompany;
use Illuminate\Http\Request;

class DeliveryCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = DeliveryCompany::all();
        return view('deliveries.index', ['deliveries' => $deliveries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|min:5|max:55',
            'adderss'       => 'required|string|min:5|max:55',
            'phone_number'  => 'required|phone:AUTO,KSA',
            'email'         => 'required|email|unique:delivery_companies',
        ]);
        $delivery = new DeliveryCompany();
        $delivery = DeliveryCompany::create([
            'name'              => ['en' => $request->name],
            'address'           => ['en' => $request->address]
        ]);
        // $delivery->name         = $request->name;
        // $delivery->address      = $request->address;
        $delivery->phone_number = $request->phone_number;
        $delivery->email        = $request->email;
        $delivery->save();
        return redirect()->route('deliveries.index', $delivery);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryCompany  $deliveryCompany
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryCompany $deliveryCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryCompany  $deliveryCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryCompany $deliveryCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryCompany  $deliveryCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryCompany $deliveryCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryCompany  $deliveryCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryCompany $deliveryCompany)
    {
        //
    }
}
