@extends('dashboard.layouts.dalem')
@section('judul','Data Master')
@section('sub-judul','Pendidikan')
@section('isi')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Pendidikan</h6>
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
                        <a href="/pendidikan/create" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                    </div>
                </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pendidikan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pendidikans as $pendidikan)
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $pendidikan->name_pendidikan}}</p>
                      </td>
                      <td class="align-middle text-center">
                          <a href="/pendidikan/{{ $pendidikan->id }}/edit" class="badge badge-sm bg-gradient-success text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <form action="/pendidikan/{{ $pendidikan->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge badge-sm bg-gradient-danger text-white font-weight-bold text-xs border-0" onclick="return confirm('Are You Sure?')">Hapus</button>
                          </form>
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