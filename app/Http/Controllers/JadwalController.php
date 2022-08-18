<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Mail;
use App\Mail\TerimaMail;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jadwal.index',[
            'title' => 'Jadwal',
            'jadwals' => Jadwal::join('lamars','jadwals.lamar_id','=','lamars.id')
            ->join('pelamars','lamars.pelamar_id','=','pelamars.id')
            ->join('posts','lamars.post_id','=','posts.id')
            ->select('jadwals.*','lamars.status','pelamars.name', 'pelamars.jenis_kelamin','pelamars.email','pelamars.no_hp','posts.lowongan','posts.gaji','posts.selesai')
            ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Jadwal $jadwal)
    {
        return view('dashboard.jadwal.jadwal', [
            'title' => 'Jadwal',
            'jadwal'    => $jadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $rules = [
            'waktu' => 'required',
            'jenis' => 'required',
            'tempat' => 'required',
        ];

        $Data = $request->validate($rules);

        Jadwal::where('id', $jadwal->id)
        ->update($Data);
        Mail::to('ahmaddwikurnia02@gmail.com')->send(new TerimaMail($jadwal));
        
        return redirect('/dashboard/jadwal')->with('success', 'Data Berhasil Diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
