@extends('layouts.main')
@section('isi')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Profile</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Profil</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products section">
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-3">
				<div class="widget">
					<h4 class="widget-title">Short By</h4>
					<form method="post" action="#">
                        <select class="form-control">
                            <option>Man</option>
                            <option>Women</option>
                            <option>Accessories</option>
                            <option>Shoes</option>
                        </select>
                    </form>
	            </div>
				<div class="widget product-category">
					<h4 class="widget-title">Categories</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
					  	<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      	<h4 class="panel-title">
						        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          	Shoes
						        	</a>
						      	</h4>
						    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<ul>
									<li><a href="#!">Brand & Twist</a></li>
									<li><a href="#!">Shoe Color</a></li>
									<li><a href="#!">Shoe Color</a></li>
								</ul>
							</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					         	Duty Wear
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					    	<div class="panel-body">
					     		<ul>
									<li><a href="#!">Brand & Twist</a></li>
									<li><a href="#!">Shoe Color</a></li>
									<li><a href="#!">Shoe Color</a></li>
								</ul>
					    	</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          	WorkOut Shoes
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					    	<div class="panel-body">
					      		<ul>
									<li><a href="#!">Brand & Twist</a></li>
									<li><a href="#!">Shoe Color</a></li>
									<li><a href="#!">Gladian Shoes</a></li>
									<li><a href="#!">Swis Shoes</a></li>
								</ul>
					    	</div>
					    </div>
					  </div>
					</div>
					
				</div>
			</div> -->
                    <div class="col-md-12">
                        <ul class="list-inline dashboard-menu text-center">
                            <li><a href="/lamaran">Lamaran</a></li>
                            <li><a class="active"  href="profile-details.html">Profile Details</a></li>
                        </ul>
                        <div class="dashboard-wrapper dashboard-user-profile">
                            <div class="media">
                                @if(session()->has('success'))
                                <div class="alert alert-success alert-common alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="tf-ion-thumbsup"></i><span>Berhasiil!</span> {{ session('success')}}
                                </div>
                                @endif
                                <div class="pull-left text-center mt-30" href="#!">
                                @if($pelamar->foto)
                                    <img src="{{ asset('storage/'. $pelamar->foto )}}" class="media-object user-img">
                                @else
                                    <img class="media-object user-img" src="{{ asset('assets/images/ava.jpg')}} " alt="Image">
                                @endif
                                    <!-- <a href="#x" class="btn btn-transparent mt-20">Change Image</a> -->
                                </div>
                                <div class="media-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Profil</th>
                                                    <th></th>
                                                    <th><div class="pull-right btn-group" data-toggle="modal" data-target="#product-modal">
                                                            <button type="button" class="btn btn-default"><i class="tf-pencil2" aria-hidden="true"></i></button>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Nama</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jenis Kelamin</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tempat Lahir</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->tempat_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tanggal Lahir</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Alamat</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->alamat}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>No HP</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->no_hp}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Pendidikan</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->pendidikan->name_pendidikan ?? 'None'}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tahun Lulus</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->tahun_lulus}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Agama</b></td>
                                                    <td>:</td>
                                                    <td>{{$pelamar->agama}}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal product-modal fade" id="product-modal">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tf-ion-close"></i>
                        </button>
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <h4 class="widget-title">Lengkapi Data</h4>
                                        <form class="checkout-form" method="POST" action="/profil/update"  enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="name" placeholder="" value="{{ $pelamar->name }}">
                                            </div>
                                            <div class="checkout-country-code clearfix">
                                                <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pelamar->tanggal_lahir }}">
                                                </div>
                                                <div class="form-group" >
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $pelamar->tempat_lahir }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ $pelamar->jenis_kelamin }}">
                                                    <option value="{{ $pelamar->jenis_kelamin }}">{{ $pelamar->jenis_kelamin }}</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <div class="text-danger">
                                                    @error('jenis_kelamin')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" value="{{ $pelamar->alamat }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_hp">No HP</label>
                                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" value="{{ $pelamar->no_hp }}" maxlength="13" onkeypress="return hanyaAngka(event)" name="no_hp">
                                                <div class="text-danger">
                                                    @error('no_hp')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control @error('pendidikan_id') is-invalid @enderror" name="pendidikan_id" id="pendidikan">
                                                <option value="">--Pilih Pendidikan--</option>
                                                @foreach ($pendidikan as $p)
                                                    @if(old('pendidikan_id', $pelamar->pendidikan_id) == $p->id)
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
                                            <div class="form-group">
                                                <label for="tahun_lulus">Tahun Lulus</label>
                                                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="{{ $pelamar->tahun_lulus }}" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <select name="agama" class="form-control @error('agama') is-invalid @enderror" value="{{ $pelamar->agama }}">
                                                    <option value="{{ $pelamar->agama }}">{{ $pelamar->agama }}</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Katolik">Kristen</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                                <div class="text-danger">
                                                    @error('agama')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="hidden" name="oldImage" value="{{ $pelamar->foto }}">
                                                @if($pelamar->foto)
                                                    <img src="{{ asset('storage/'. $pelamar->foto )}}" class="img-preview img-responsive mb-3 d-block max-height-100">
                                                @else
                                                    <img class="img-preview img-responsive mb-3">
                                                @endif
                                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" onchange="previewFoto()">
                                            </div>
                                            <div class="d-flex justify-content-end mt-4">
                                                <button class="btn btn-main mt-20">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
	</div>
</section>

<script>
    //Menampilkan Preview Gambar
    function previewFoto(){
        const foto = document.querySelector('#foto');
        const gambarPreview = document.querySelector('.img-preview');

        gambarPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(foto.files[0]);

        ofReader.onload = function(oFREvent){
            gambarPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection