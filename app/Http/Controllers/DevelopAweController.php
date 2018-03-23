<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DevelopAweController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        Mail::to('ococncol@gmail.com')->send(new ContactUs($request));

        session()->flash('message', 'Email was sent');

        return redirect()->home();
    }
}
