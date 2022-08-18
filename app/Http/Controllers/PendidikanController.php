<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.pendidikan.index',[
        'title' => 'Pendidikan',
        'pendidikans' => Pendidikan::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pendidikan.create',[
            'title' => 'Pendidikan',
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
            'name_pendidikan' => 'required',
        ]);

        Pendidikan::create($Data);

        return redirect('/pendidikan')->with('success', 'Data Berhasil Ditambahkan!!');
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
    public function edit(Pendidikan $pendidikan)
    {
        return view('dashboard.pendidikan.edit', [
            'title' => 'Pendidikan',
            'pendidikan'          => $pendidikan
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $rules = [
            'name_pendidikan' => 'required',
        ];

        $Data = $request->validate($rules);

        Pendidikan::where('id', $pendidikan->id)
        ->update($Data);

        return redirect('/pendidikan')->with('success', 'Data Berhasil Diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidikan $pendidikan)
    {
        Pendidikan::destroy($pendidikan->id);
        return redirect('/pendidikan')->with('success', 'Data Berhasil Dihapus!!!');
    }
}
