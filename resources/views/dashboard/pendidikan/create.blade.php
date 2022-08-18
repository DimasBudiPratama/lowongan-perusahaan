@extends('dashboard.layouts.dalem')
@section('judul','Pendidikan')
@section('sub-judul','Tambah Data')
@section('isi')

<div class="page-wrapper">
    <div class="row mt-4">
        <div class="col-lg-10 col-12 mx-auto position-relative">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah Data</h6>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <form action="/pendidikan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-static my-4">
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="name_pendidikan" autofocus value="{{ old('name_pendidikan') }}" required>
                            <div class="text-danger">
                                @error('pendidikan')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn bg-gradient-dark m-0 ms-2">Simpan</button>
                            <a href="/pendidikan" class="btn btn-light m-0">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection