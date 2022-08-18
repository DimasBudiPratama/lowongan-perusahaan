@extends('dashboard.layouts.dalem')
@section('judul','User')
@section('sub-judul','Edit Data')
@section('isi')

<div class="page-wrapper">
    <div class="row mt-4">
        <div class="col-lg-10 col-12 mx-auto position-relative">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Data</h6>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <form action="/user/{{ $users->id }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="input-group input-group-static my-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name', $users->name) }}">
                            <div class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="input-group input-group-static my-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $users->email) }}">
                            <div class="text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="input-group input-group-static my-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $users->username) }}">
                            <div class="text-danger">
                                @error('username')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="input-group input-group-static my-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan jika ingin mengubah kata sandi" id="password" name="password">
                            <div class="text-danger">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group align-self-center">
                        <label class="form-label mt-1 ms-0">level</label>
                        <select class="form-control form-control @error('level') is-invalid @enderror" name="level" id="choices-level">
                            <option value="" holder>Pilih Level User</option>
                            <option value="1" holder @if($users->level == 1)
                                selected
                                @endif
                                >HRD</option>
                            <option value="2" holder @if($users->level == 2)
                                selected
                                @endif
                                >Manajer</option>
                        </select>
                        <div class="text-danger">
                            @error('level')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn bg-gradient-dark m-0 ms-2">Update</button>
                            <a href="/user" class="btn btn-light m-0">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection