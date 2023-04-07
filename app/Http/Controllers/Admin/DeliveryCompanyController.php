<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCompany;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

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
        $deliveryCompany = new DeliveryCompany();
        $deliveryCompany = DeliveryCompany::create([
            'name'              => ['en' => $request->name],
            'address'           => ['en' => $request->address]
        ]);
        // $deliveryCompany->name         = $request->name;
        // $deliveryCompany->address      = $request->address;
        $deliveryCompany->phone_number = $request->phone_number;
        $deliveryCompany->email        = $request->email;
        $deliveryCompany->save();
        return redirect()->route('deliveries.index', $deliveryCompany);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryCompany  $deliveryCompany
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryCompany $deliveryCompany)
    {
        return view('deliveries.show', ['deliveryCompany' => $deliveryCompany]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryCompany  $deliveryCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryCompany $deliveryCompany)
    {
        return view('deliveries.edit',['deliveryCompany' => $deliveryCompany]);
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
        $request->validate([
            'name'          => 'required|string|min:5|max:55',
            'adderss'       => 'required|string|min:5|max:55',
            'phone_number'  => 'required|phone:AUTO,KSA',
            'email'         => 'required|email|unique:delivery_companies',
        ]);
        $deliveryCompany = DeliveryCompany::create([
            'name'              => ['en' => $request->name],
            'address'           => ['en' => $request->address]
        ]);
        // $deliveryCompany->name         = $request->name;
        // $deliveryCompany->address      = $request->address;
        $deliveryCompany->phone_number = $request->phone_number;
        $deliveryCompany->email        = $request->email;
        $deliveryCompany->save();
        return redirect()->route('deliveries.show');
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
