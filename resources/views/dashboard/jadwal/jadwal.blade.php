@extends('dashboard.layouts.dalem')
@section('judul','Pelamar')
@section('sub-judul','Jadwal Wawancara')
@section('isi')

<div class="page-wrapper">
    <div class="row mt-4">
        <div class="col-lg-10 col-12 mx-auto position-relative">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Jadwal Wawancara</h6>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <form action="/dashboard/jadwal/{{ $jadwal->id }}" method="POST">
                    @method('patch')
                    @csrf
                    <!-- <div class="input-group input-group-static my-4">
                            <label for="lamar_id" class="form-label">Pelamar</label>
                            <input type="text" class="form-control @error('lamar_id') is-invalid @enderror" id="lamar_id" name="lamar_id" value="{{$jadwal->lamar_id}}" autofocus >
                            <div class="text-danger">
                                @error('lamar_id')
                                {{ $message }}
                                @enderror
                            </div>
                        </div> -->
                        <div class="input-group input-group-static my-4">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" autofocus >
                            <div class="text-danger">
                                @error('waktu')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="input-group input-group-static my-4">
                            <label for="jenis" class="form-label">Jenis Wawancara</label>
                            <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis">
                            <div class="text-danger">
                                @error('jenis')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="input-group input-group-static my-4">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat">
                            <div class="text-danger">
                                @error('tempat')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn bg-gradient-dark m-0 ms-2">Update</button>
                            <a href="/dashboard/jadwal" class="btn btn-light m-0">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection