@extends('dashboard.layouts.dalem')
@section('judul','Jadwal')
@section('isi')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Jadwal</h6>
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
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pelamar</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Waktu</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Wawancara</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tempat</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jadwals as $jadwal)
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">Nama :{{ $jadwal->name}}</p>
                          <p class="text-xs font-weight-bold mb-0">Jenis Kelamin:{{ $jadwal->jenis_kelamin}}</p>
                          <p class="text-xs font-weight-bold mb-0">Email :{{ $jadwal->email}}</p>
                          <p class="text-xs font-weight-bold mb-0">NoHP:{{ $jadwal->no_hp}}</p>
                          <p class="text-xs font-weight-bold mb-0">Lowongan :{{ $jadwal->lowongan}}</p>
                          <p class="text-xs font-weight-bold mb-0">Gaji:{{ $jadwal->gaji}}</p>
                          <p class="text-xs font-weight-bold mb-0">Deadline :{{ $jadwal->selesai}}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $jadwal->waktu}}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $jadwal->jenis}}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $jadwal->tempat}}</p>
                      </td>
                      <td>
                        <a href="/dashboard/jadwal/{{ $jadwal->id }}/edit" class="badge badge-sm bg-gradient-info text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              Jadwal Wawancara
                        </a>
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