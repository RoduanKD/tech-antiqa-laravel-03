<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class PagesController extends Controller
{
    public function welcome()
    {
        $products = Product::paginate(6);
        return view('public.home', ['products' => $products]);
    }
    public function places()
    {
        $countries = Country::all();
        $cities = City::all();
        return view('places', ['countries' => $countries, 'citeis' => $cities]);
    }
}
