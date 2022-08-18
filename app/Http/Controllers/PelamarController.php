<?php

namespace App\Http\Controllers;

use App\Models\Lamar;
use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
   public function index()
   {
        $id = auth()->user()->pelamars->id;
        $pelamar = Pelamar::findorfail($id);
        $pendidikan = Pendidikan::all();
        $title   = 'Profil';
        return view('profil.index', compact('pelamar', 'pendidikan', 'title'));
   }

   public function update(Request $request)
   {
    $id = auth()->user()->pelamars->id;

    $rules = [
        'name' => 'required|max:100',
        'foto' => 'image|file|max:2048', //Jika gambar kosong tidak masalah, karena mengambil udah API Gambar
        'jenis_kelamin'  => 'required',
        'pendidikan_id'   => 'required',
        'tempat_lahir'  => 'required',
        'tanggal_lahir'  => 'required',
        'alamat'  => 'required',
        'no_hp'  => 'required',
        'tahun_lulus'  => 'required',
        'agama'  => 'required',
    ];

    $pegawai = Pelamar::findorfail($id);

    $Data = $request->validate($rules);

    if($request->file('foto')){
        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $Data['foto'] = $request->file('foto')->store('pelamar-images');
    }

    $Data['user_id'] = auth()->user()->id;
    $Data['status'] = 1;

    $pegawai->update($Data);

    return redirect('/profil')->with('success', 'Data Berhasil Ditambahkan!!!');
   }

   public function show()
    {   
        return view('profil.lamaran',
        [
            'lamars' => Lamar::join('pelamars', 'lamars.pelamar_id', '=', 'pelamars.id')
                ->join('pendidikans', 'pelamars.pendidikan_id', '=', 'pendidikans.id')
                ->join('posts', 'lamars.post_id', '=', 'posts.id')
                ->select('lamars.*', 'pelamars.name', 'pelamars.jenis_kelamin','pelamars.email','pelamars.no_hp','pelamars.tahun_lulus','pendidikans.name_pendidikan','posts.lowongan','posts.gaji','posts.selesai')
                ->where('pelamar_id', auth()->user()->pelamars->id)->get(),
            'title' => 'Lamaran'
        ]);
    }
}