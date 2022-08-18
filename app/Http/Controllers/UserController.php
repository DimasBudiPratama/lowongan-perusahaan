<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index',[
            'title' => 'User',
            'users' => User::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create',[
            'title' => 'User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'name'      => 'required|max:100',
            'username'  => 'required|min:3|max:10|unique:users',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:5',
            'level'     => 'required',
        ]);

        // $Data['password'] = bcrypt($Data['password']);
        $Data['password'] = Hash::make($Data['password']);

        User::create($Data);

        return redirect('/user')->with('success', 'Data Berhasil Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'title' => 'User',
            'users'          => $user
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'username'  => 'required|min:3|max:10',
            'email'     => 'required|email:dns',
            'level'     => 'required',
            'password'  => 'required|min:5',
        ]);

        if ($request->input('password')) {
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'level' => $request->level,
                'password' => bcrypt($request->password)
            ];
        } else {
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'level' => $request->level,
            ];
        }

        $users = User::find($id);
        $users->update($user_data);

        return redirect('/user')->with('success', 'User Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user')->with('success', 'Data Berhasil Dihapus!!!');
    }
}
