@extends('layouts.main')
@section('isi')
<section class="page-wrapper">
	<div class="container">
		<div class="row justify-center">
			<div class="col-md-8">
				<div class="post post-single">
					@if ($dancuk->sampul)
                    <div class="post-media post-thumb">
                        <a href="blog-single.html">
                            <img src="{{ asset('storage/' . $dancuk->sampul)}}" style="height: 300px;" alt="{{ $dancuk->category->name }}">
                        </a>
                    </div>
                    @else
                    <div class="post-media post-thumb">
                        <a href="blog-single.html">
							<img class="img-responsive" src="https://source.unsplash.com/1200x600/?{{ $dancuk->category->name }}" alt="">
                        </a>
                    </div>
                    @endif
					<h2 class="post-title">{{ $dancuk->lowongan}}</h2>
					<div class="post-meta">
						<ul>
							<li>
                                <i class="tf-ion-ios-clock"></i> {{$dancuk->selesai }}
                            </li>
							<li>
								<a href="/posts?author={{ $dancuk->author->username }}"><i class="tf-ion-android-person"></i> {{ $dancuk->author->name }}</a>
							</li>
							<li>
								<a href="/posts?category={{ $dancuk->category->slug }}"><i class="tf-ion-social-buffer"></i> {{ $dancuk->category->name}}</a>
							</li>
							<li>
							    <i class="tf-ion-university"></i> {{$dancuk->pendidikan->name_pendidikan}}</a>
						    </li>
						</ul>
					</div>
					<div class="post-content post-excerpt">
					<ol>
						<li>
							{!! $dancuk->keterangan !!}
						</li> <!-- Tidak Melakukan Excepting untuk mencetak menggunakan tag html contoh nya di dalam blog <p>Ini body</p> -->
					</ol>
					</div>
					<div class="post-content post-excerpt">
						<h3>Informasi Tambahan</h3>
						<table>
							<tr>
								<th style="width: 500px;"><b>Jenis Pekerjaan</b></th>
								<th><b>Kualifikasi</b></th>
							</tr>
							<tr>
								<td style="width: 500px;">{{$dancuk->jenis_pekerjaan }}</td>
								<td>{{$dancuk->pendidikan->name_pendidikan}}</td>
							</tr>
						</table>
						<table>
							<tr>
								<th style="width: 500px;"><b>Pengalaman Pekerjaan</b></th>
								<th><b>Specialisasi Pekerjaan</b></th>
							</tr>
							<tr>
								<td style="width: 500px;">{{$dancuk->pengalaman }}</td>
								<td><a href="/posts?category={{ $dancuk->category->slug }}">{{ $dancuk->category->name}}</a></td>
							</tr>
						</table>
					</div>
                </div>
            </div>
			<div class="col-md-4">
				<aside class="sidebar">
					<div class="dashboard-wrapper dashboard-user-profile">
						<p>Job Overview</p>
								<ul class="user-profile-list">
									<li><span>Posted Date :</span>{{ $dancuk->mulai }}</li>
									<li><span>Location :</span>INDONESIA</li>
									<li><span>Salary :</span>{{ $dancuk->gaji }}</li>
									<li><span>Deadline :</span>{{ $dancuk->selesai }}</li>
								</ul>
								@if (auth()->user()->level==3)
									@if ($dancuk->status == 1)
									<ul class="list-inline dashboard-menu text-center">
										<li><a href="/posts">Back</a></li>
											@if ($pelamar->status == 1)
											<li><a class="active"  href="/pelamar/{{ $dancuk->slug }}">Apply Now</a></li>
											</li>
											@else
											<div class="small-section-tittle">
												<h4><b>Pemberitahuan</b></h4>
											</div>
												<font style="color:red;">Silahkan isi Data Diri Terlebih Dahulu !!</font>
											@endif
									</ul>
									@else
									<ul class="list-inline dashboard-menu text-center">
										<li><a href="/posts">Back</a></li>
										<li><a class="active"  href="/posts">Closed</a></li>
										
									</ul>
									@endif
								@endif

					</div>
					<br>
					<!-- Widget Latest Posts -->
					<div class="widget widget-latest-post">
						<h2 class="widget-title">Company Information</h2>
						<div class="media">
							<div class="media-body">
								<h4 class="media-heading"><b>Indonesia Trans Network</b></h4>
								<p>PT Indonesia Trans Network merupakan perusahaan di Bandar Lampung yang 
								bergerak di bidang Internet Service Provider yang menawarkaan layanan internet
								untuk menunjang layanan akses internet untuk menunjang kelancaran komunikasi.</p>
							</div>
						</div>
					</div>
					<!-- End Latest Posts -->
					<!-- Widget Category -->
					<div class="widget widget-category">
						<h4 class="widget-title">Categories</h4>
						@foreach ($categories as $kategori)   
						<ul class="widget-category-list">
							<li><a href="/posts?category={{ $kategori->slug }}">{{$kategori->name}}</a>
							</li>
						</ul>
						@endforeach
					</div> <!-- End category  -->
				</aside>
			</div>
        </div>
		<!-- <div class="modal product-modal fade" id="product-modal">
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
									<input type="text" class="form-control" id="nama_lengkap" name="name" placeholder="">
								</div>
								<div class="form-group">
									<label for="nama_lengkap">Lowongan</label>
									<input type="text" class="form-control" id="nama_lengkap" name="name" placeholder="">
								</div>
								<div class="form-group">
									<label for="nama_lengkap">Surat Lamaran</label>
									<input type="file" class="form-control" id="nama_lengkap" name="name" placeholder="">
								</div>
								<div class="form-group">
									<label for="nama_lengkap">Ijazah</label>
									<input type="file" class="form-control" id="nama_lengkap" name="name" placeholder="">
								</div>
								<div class="form-group">
									<label for="nama_lengkap">Pengamalan Kerja</label>
									<input type="file" class="form-control" id="nama_lengkap" name="name" placeholder="">
								</div>
								<div class="d-flex justify-content-end mt-4">
									<button class="btn btn-main mt-20">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> -->
    </div>
</section>
@endsection