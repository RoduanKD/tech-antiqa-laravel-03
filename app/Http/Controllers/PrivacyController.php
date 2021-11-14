<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    public function show()
    {
        return view('admin.privacy.show');
    }

    public function edit()
    {
        return view('admin.privacy.edit');
    }
}
