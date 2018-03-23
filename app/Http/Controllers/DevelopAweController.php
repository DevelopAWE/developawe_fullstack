<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopAweController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        // code ...
    }
}
