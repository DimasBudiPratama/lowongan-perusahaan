@extends('dashboard.layouts.dalem')
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
                    <form action="/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="input-group input-group-static my-4">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name', $category->name) }}">
                            <div class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="input-group input-group-static my-4">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $category->slug }}">
                            <div class="text-danger">
                                @error('slug')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn bg-gradient-dark m-0 ms-2">Update</button>
                            <a href="/category" class="btn btn-light m-0">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/category/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    //Menonaktifkan File Upload di Trix Editor
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script> -->

@endsection