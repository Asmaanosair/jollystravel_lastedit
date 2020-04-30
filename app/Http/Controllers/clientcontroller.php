<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }

    public function index(){
        return view('website.myaccount');
    }

}
