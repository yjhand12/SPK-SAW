<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error404Controller extends Controller
{
    public function index()
    {
        return view('404');    
    }
}
