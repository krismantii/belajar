<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class adminloginController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }

    
}
