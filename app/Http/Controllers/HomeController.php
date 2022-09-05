<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
         return view('home');
    }

    public function guest()
    {
        return view('guest', ['your_name' => 'guest']);
    }

    public function auth(Request $request)
    {
        return view('home', ['your_name' => $request->your_name]);
    }
}
