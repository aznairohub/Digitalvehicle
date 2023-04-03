<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insuranceController extends Controller
{
    public function insurance()
    {
        return view('insurance.insurance');
    }

}
