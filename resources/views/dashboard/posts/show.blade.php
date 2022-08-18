@extends('dashboard.layouts.dalem')
@section('judul','Post')
@section('sub-judul','View Data')
@section('isi')

    <div class="container-fluid px-2 px-md-4">
        @if ($post->sampul)
        <div class="page-header min-height-300 border-radius-xl mt-4" style="height: 300px; width:900px;">
            <img src="{{ asset('storage/' . $post->sampul)}}" alt="">
        </div>
        @else
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://source.unsplash.com/500x300/?{{ $post->category->name }}');">
        </div>
        @endif
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto my-auto">
                    <div class="h-100">
                    <h5 class="mb-1">
                        {{ $post->lowongan}}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        By. {{ $post->author->name }} In. {{ $post->category->name }}
                    </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <a href="/dashboard/posts" class="m-1 badge badge-sm bg-gradient-info text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Back
                                        </a>
                                        @if (auth()->user()->level==1)
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="m-1 badge badge-sm bg-gradient-success text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                        </a>
                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge badge-sm bg-gradient-danger text-white font-weight-bold text-xs border-0" onclick="return confirm('Are You Sure?')">Hapus</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                        <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">PT. INDONESIA TRANS NETWORK</h6>
                                        <span class="mb-2 text-xs">Company Name : <span class="text-dark font-weight-bold ms-sm-2">Indonesia Trans Network</span></span>
                                        <span class="mb-2 text-xs">Location : <span class="text-dark ms-sm-2 font-weight-bold">Jl. Kimaja(Kimaja Icon), samping Jaya Bakery, 10m sebelum fly over Tanjung Seneng Bandar Lampung</span></span>
                                        <span class="mb-2 text-xs">Kualifikasi : <span class="text-dark ms-sm-2 font-weight-bold">{{$post->pendidikan->name_pendidikan}}</span></span>
                                        <span class="text-xs">Ditanyangkan Pada : <span class="text-dark ms-sm-2 font-weight-bold">{{$post->mulai}} s/d {{$post->selesai}}</span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-1 mt-7">
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-plain h-100">
                                <div class="card-body p-3">
                                    <p class="text-sm">
                                    {!! $post->keterangan !!}
                                    </p>
                                    <hr class="horizontal gray-light my-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection