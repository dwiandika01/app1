<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // public function home()
    // {
    //     return view('home');
    // }

    public function beranda()
    {
        return view('dashboard.beranda');
    }
}
