<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index()
   {
    return view('login.index',[
        'title' => 'Login'
    ]);
   }

   public function masuk(Request $request)
   {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password'  => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->with('error','Login Failed!');
   }

   public function keluar(Request $request)
   {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
   }
}
