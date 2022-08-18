<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamar;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Mail;
use App\Mail\TolakMail;

class LamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lamars = Lamar::join('pelamars', 'lamars.pelamar_id', '=', 'pelamars.id')
        ->join('pendidikans', 'pelamars.pendidikan_id', '=', 'pendidikans.id')
        ->join('posts', 'lamars.post_id', '=', 'posts.id')
        ->select('lamars.*', 'pelamars.name', 'pelamars.jenis_kelamin','pelamars.email','pelamars.no_hp','pelamars.tahun_lulus','pendidikans.name_pendidikan','posts.lowongan','posts.gaji','posts.selesai')
        ->get();
        $title = 'Lamaran';
        return view('dashboard.pelamar.index', compact('lamars','title'));
    }

    public function cetak()
    {
        $lamars = Lamar::join('pelamars', 'lamars.pelamar_id', '=', 'pelamars.id')
            ->join('pendidikans', 'pelamars.pendidikan_id', '=', 'pendidikans.id')
            ->join('posts', 'lamars.post_id', '=', 'posts.id')
            ->select('lamars.*', 'pelamars.name', 'pelamars.jenis_kelamin','pelamars.email','pelamars.no_hp','pelamars.tahun_lulus','pendidikans.name_pendidikan','posts.lowongan','posts.gaji','posts.selesai')
            ->get();
        $title = 'Lamaran';
        return view('dashboard.pelamar.print', compact('lamars','title'));
        // $pdf = PDF::loadview('dashboard.pelamar.print', compact('lamars'));
        // $pdf->setPaper('A4','Potrait');
        // return $pdf->stream('lamaran.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
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
        $lamar = Lamar::findorfail($id);
        $Data['status'] = 'Tidak Lolos Seleksi Berkas';
        $lamar->update($Data);


        return redirect('/dashboard/lamaran')->with('success', 'Pelamar Lolos Seleksi Adminstrasi Berkas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        // return view('dashboard.jadwal.jadwal', [
        //     'jadwal'    => $jadwal
        // ]);
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
        $lamar = Lamar::findorfail($id);
        $Data['status'] = 'Seleksi Wawancara';
        $lamar->update($Data);

        $jadwal = new Jadwal;
        $jadwal->lamar_id = $id;
        $jadwal->save();
        


        return redirect('/dashboard/lamaran')->with('success', 'Pelamar Lolos Seleksi Adminstrasi Berkas');
    }

    public function tolak(Request $request, $id)
    {
        $isi_email = [
            'title' => 'Pemberitahuan !!!',
            'body'  => 'Anda Tidak Lolos Seleksi Adminstrasi Berkas'
        ];
        $lamar = Lamar::findorfail($id);
        $Data['status'] = 'Tidak Lolos Seleksi Berkas';
        $lamar->update($Data);
        $tujuan = 'ahmaddwikurnia02@gmail.com';
        Mail::to($tujuan)->send(new TolakMail($isi_email));


        return redirect('/dashboard/lamaran')->with('success', 'Pelamar Tidak Lolos Seleksi Adminstrasi Berkas');
    }

    public function jadwal(Request $request, $id)
    {
        $jadwal = Jadwal::findorfail($id);
        $Data['waktu'] = $this->request->waktu;
        $Data['jenis'] = $this->request->jenis;
        $Data['tempat'] = $this->request->tempat;
        $jadwal->update($Data);
        dd($jadwal);

        return redirect('/jadwal')->with('success', 'Data Berhasil Diupdate!!!');
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
