@extends('layouts.main')
@section('isi')
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Upload Berkas Lamaran</h4>
                  <form class="checkout-form" method="POST" action="/pelamar/update"  enctype="multipart/form-data">
                    @csrf
                    <!-- <div class="form-group">
                        <label for="full_name">Nama Lengkap</label>
                        <input type="hidden" class="form-control @error('pelamar_id') is-invalid @enderror" id="full_name" name="pelamar_id" value="{{ $pelamar->name }}" readonly>
                        <div class="text-danger">
                            @error('pelamar_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div> -->
                     <div class="form-group">
                        <input type="hidden" class="form-control @error('post_id') is-invalid @enderror" id="user_address" name="post_id" value="{{ $lowongan->id}}" placeholder="" readonly>
                        <div class="text-danger">
                            @error('post_id')
                            {{ $message }}
                            @enderror
                        </div> 
                    </div>
                    Hai {{ auth()->user()->name }}, Untuk melakukan lamaran anda harus mengupload CV dan berkas lainya dalam 1 file PDF. Silahkan upload pada kolom dibawah ini.
                     <div class="form-group">
                       <label for="surat">Berkas</label>
                        <input type="file" class="form-control @error('berkas') is-invalid @enderror" id="surat" name="berkas" placeholder="" required="" accept="application/pdf">
                        <div class="text-danger">
                            @error('berkas')
                            {{ $message }}
                            @enderror
                        </div> 
                    </div>
                        <button class="btn btn-main mt-20">Simpan</button>
                  </form>
               </div>
            </div>
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Informasi Tambahan</h4>
                     <div class="media product-card">
                        <div class="media-body">
                           <h4 class="media-heading"><a href="/posts">Jenis Lowongan : {{ $lowongan->lowongan}}</a></h4>
                           <p class="price">Spesialisasi Pekerjaan : {{ $lowongan->category->name}}</p>
                           <p class="price">Kualifikasi : {{ $lowongan->pendidikan->name_pendidikan}}</p>
                        </div>
                     </div>
                     <div class="discount-code">
                        <p>Ditayangkan pada : {{ $lowongan->mulai }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection