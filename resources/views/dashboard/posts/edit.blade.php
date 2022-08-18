@extends('dashboard.layouts.dalem')
@section('judul','Post')
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
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="input-group input-group-static my-4">
                            <label for="lowongan" class="form-label">Judul Lowongan</label>
                            <input type="text" class="form-control @error('lowongan') is-invalid @enderror" id="lowongan" name="lowongan" autofocus value="{{ old('lowongan', $post->lowongan) }}">
                            <div class="text-danger">
                                @error('lowongan')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="input-group input-group-static my-4">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $post->slug }}">
                            <div class="text-danger">
                                @error('slug')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="input-group input-group-static my-4">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" class="form-control @error('gaji') is-invalid @enderror" placeholder="Ex : Negoitable or Rp1.500.000 - Rp5.000.000" id="gaji" name="gaji" value="{{ $post->gaji }}">
                            <div class="text-danger">
                                @error('gaji')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <label for="mulai" class="form-label">Mulai</label>
                        <div class="input-group input-group-static">
                            <input type="date" class="form-control @error('mulai') is-invalid @enderror" id="mulai" name="mulai" value="{{ $post->mulai }}">
                            <div class="text-danger">
                                @error('mulai')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        
                        <label for="selesai" class="form-label">Selesai</label>
                        <div class="input-group input-group-static">
                            
                            <input type="date" class="form-control @error('selesai') is-invalid @enderror" id="selesai" name="selesai" value="{{ $post->selesai }}">
                            <div class="text-danger">
                                @error('selesai')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group align-self-center my-4">
                            <label class="form-label ms-0">Category</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="choices-category">
                                <option value="">--Pilih Category--</option>
                                @foreach ($categories as $category)
                                    @if(old('category_id', $post->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('category_id')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group align-self-center my-4">
                            <label class="form-label ms-0">Pendidikan</label>
                            <select class="form-control @error('pendidikan_id') is-invalid @enderror" name="pendidikan_id" id="choices-category">
                                <option value="">--Pilih Pendidikan--</option>
                                @foreach ($pendidikan as $p)
                                    @if(old('pendidikan_id', $post->pendidikan_id) == $p->id)
                                        <option value="{{ $p->id }}" selected>{{ $p->name_pendidikan }}</option>
                                    @else
                                        <option value="{{ $p->id }}">{{ $p->name_pendidikan }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('pendidikan_id')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group align-self-center my-4">
                        <label class="form-label ms-0">Jenis Pekerjaan</label>
                            <select name="jenis_pekerjaan" class="form-control @error('jenis_pekerjaan') is-invalid @enderror">
                                <option value="{{ $post->jenis_pekerjaan }}">{{ $post->jenis_pekerjaan }}</option>
                                <option value="">--Jenis Pekerjaan--</option>
                                <option value="Penuh Waktu">Penuh Waktu</option>
                                <option value="Paruh Waktu">Paruh Waktu</option>
                            </select>
                            <div class="text-danger">
                                @error('jenis_pekerjaan')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="input-group input-group-static my-4">
                            <label for="pengalaman" class="form-label">Pengalaman</label>
                            <input type="text" class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman" name="pengalaman" value="{{ $post->pengalaman }}">
                            <div class="text-danger">
                                @error('pengalaman')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>


                        <label for="keterangan" class="form-label">Keterangan</label>
                        <div class="input-group input-group-static">
                                <input id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" type="hidden" name="keterangan" value="{{ $post->keterangan }}">
                                <trix-editor input="keterangan" class="form-control"></trix-editor>
                        </div>

                        <div class="input-group input-group-static my-4">
                            <label>Sampul</label>
                            <input type="hidden" name="oldImage" value="{{ $post->sampul }}">
                            @if($post->sampul)
                                <img src="{{ asset('storage/'. $post->sampul )}}" class="img-preview img-fluid mb-3 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif
                            <input type="file" class="form-control @error('sampul') is-invalid @enderror" id="sampul" name="sampul" onchange="previewSampul()">
                            <div class="text-danger">
                                @error('sampul')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn bg-gradient-dark m-0 ms-2">Update</button>
                            <a href="/dashboard/posts" class="btn btn-light m-0">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const lowongan = document.querySelector('#lowongan');
    const slug = document.querySelector('#slug');

    lowongan.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?lowongan=' + lowongan.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    //Menonaktifkan File Upload di Trix Editor
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


    //Menampilkan Preview Gambar
    function previewSampul(){
        const sampul = document.querySelector('#sampul');
        const gambarPreview = document.querySelector('.img-preview');

        gambarPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(sampul.files[0]);

        ofReader.onload = function(oFREvent){
            gambarPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection