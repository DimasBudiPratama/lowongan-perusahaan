<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 
class RegisterController extends Controller
{
    public function index()
    {
     return view('register.index',[
         'title' => 'Register'
     ]);
    }

    public function store(Request $request)
    {
        $Data = $request->validate([
            'name'      => 'required|max:100',
            'username'  => 'required|min:5|max:100|unique:users',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:5'
        ]);

        // $Data['password'] = bcrypt($Data['password']);
        $Data['password'] = Hash::make($Data['password']);

        User::create($Data);

        // $request->session()->flash('success','Registration Successfull! Please Login Broh!!');
        return redirect('/login')->with('success','Registration Successfull! Please Login Broh!!');
    }
}
