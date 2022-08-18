@extends('dashboard.layouts.dalem')
@section('judul','Pelamar')
@section('sub-judul','Data Pelamar')
@section('isi')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Pelamar</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm">{{ session('success')}}</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
                <div class="ms-auto my-auto">
                    <div class="ms-auto my-auto ps-3">
                        <a href="/cetak" target="_blank" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Cetak Data</a>
                    </div>
                </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pelamar</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lowongan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lamaran</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($lamars as $lamar)
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">Nama :{{ $lamar->name}}</p>
                          <p class="text-xs font-weight-bold mb-0">Jenis Kelamin:{{ $lamar->jenis_kelamin}}</p>
                          <p class="text-xs font-weight-bold mb-0">Email :{{ $lamar->email}}</p>
                          <p class="text-xs font-weight-bold mb-0">NoHP:{{ $lamar->no_hp}}</p>
                          <p class="text-xs font-weight-bold mb-0">Pendidikan:{{ $lamar->name_pendidikan}}|Tahun:{{$lamar->tahun_lulus}}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">Lowongan :{{ $lamar->lowongan}}</p>
                          <p class="text-xs font-weight-bold mb-0">Gaji:{{ $lamar->gaji}}</p>
                          <p class="text-xs font-weight-bold mb-0">Deadline :{{ $lamar->selesai}}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">Waktu :{{ $lamar->waktu}}</p>
                          <p class="text-xs font-weight-bold mb-0">Berkas: <a href="{{ asset('storage/' . $lamar->berkas)}}" style="color:red;">Lihat File</a></p>
                          <p class="text-xs font-weight-bold mb-0">Status:{{ $lamar->status}}</p>
                      </td>
                      <td class="align-middle text-center">
                          <!-- <a href="" class="badge badge-sm bg-gradient-success text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="material-icons">check</i>
                          </a> -->
                          @if($lamar->status === 'Seleksi Administrasi')
                          <form action="/dashboard/lamaran/{{ $lamar->id }}" method="post" class="d-inline">
                          @method('patch')
                            @csrf
                            <button class="badge badge-sm bg-gradient-success text-white font-weight-bold text-xs border-0"> <i class="material-icons">check</i></button>
                          </form>
                          <form action="/dashboard/tolak/{{ $lamar->id }}" method="post" class="d-inline">
                            @csrf
                            <button class="badge badge-sm bg-gradient-danger text-white font-weight-bold text-xs border-0"> <i class="material-icons">clear</i></button>
                          </form>
                          @else
                            @if($lamar->status === 'Seleksi Wawancara')
                            <a href="/dashboard/jadwal/" class="badge badge-sm bg-gradient-info text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              Data Wawancara
                            </a>
                            @endif
                          @endif
                      </td>
                    </tr>
                    @endforeach  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection