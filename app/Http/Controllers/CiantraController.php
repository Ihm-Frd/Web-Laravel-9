<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiantraController extends Controller
{
    public function home()
    {
        return view('ciantra/home');
    }

    public function submitWA()
    {
        return view('ciantra/submitWA');
    }
}
