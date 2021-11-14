<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    public function show()
    {
        return view('admin.terms.show');
    }

    public function edit()
    {
        return view('admin.terms.edit');
    }
}
