<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.keahlian.index',[
            'title' => 'Keahlian',
            'keahlians' => Keahlian::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.keahlian.create',[
            'title' => 'Keahlian',
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
            'name_keahlian' => 'required',
        ]);

        Keahlian::create($Data);

        return redirect('/keahlian')->with('success', 'Data Berhasil Ditambahkan!!');
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
    public function edit(Keahlian $keahlian)
    {
        return view('dashboard.keahlian.edit', [
            'title' => 'Keahlian',
            'keahlian'          => $keahlian
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keahlian $keahlian)
    {
        $rules = [
            'name_keahlian' => 'required',
        ];

        $Data = $request->validate($rules);

        Keahlian::where('id', $keahlian->id)
        ->update($Data);

        return redirect('/keahlian')->with('success', 'Data Berhasil Diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keahlian $keahlian)
    {
        Keahlian::destroy($keahlian->id);
        return redirect('/keahlian')->with('success', 'Data Berhasil Dihapus!!!');
    }
}
