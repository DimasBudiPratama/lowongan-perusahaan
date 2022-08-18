<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         return view('home',[
            'title' => "home"
           ]);
    }

    public function about()
    {
        return view('about',[
            'title' => "about"
           ]);
    }
    public function contact()
    {
        return view('contact',[
            'title' => "contact"
           ]);
    }
}
