<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LetterController extends Controller
{
    public function store(Request $request)
    {

       

        $name = $request->name;
        Mail::to($request->email())->send(new WelcomeEmail($name));

        return redirect()->back->with('Success','Your Message was sent');
    }
}
