<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komunitas;                    
use Illuminate\Support\Facades\Storage;

class loginkomunitasController extends Controller
{
    public function index()
    {
        return view('loginkomunitas');
    }

}
