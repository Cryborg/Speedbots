<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;

class HomeController extends ControllerBase
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
