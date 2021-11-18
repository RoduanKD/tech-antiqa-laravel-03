<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use SebastianBergmann\LinesOfCode\Counter;

class CountryController extends Controller
{
    public function create()
    {
        $countries=Country::all();
        return view('countries.create',['countries'=>$countries]);
    }

    public function edit(Country $country)
    {
        return view('countries.edit',['country'=>$country]);
    }

    /*public function update(Country $country, Request $request)
    {
        $request->validate([
            'name'      => 'required|string|min:3|max:55',
        ]);
        $country->name      = $request->name;
        $country->save();
        return redirect()->back()->with('Successfully Updated.');
    }*/
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->back();
    }
}
