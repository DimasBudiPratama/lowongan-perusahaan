@extends('layouts.main')
@section('isi')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Lamaran</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Lamaran</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="products section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <ul class="list-inline dashboard-menu text-center">
            <li><a class="active" href="/lamaran">Lamaran</a></li>
            <li><a href="/profil">Profile Details</a></li>
        </ul>
            <div class="dashboard-wrapper dashboard-user-profile">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lowongan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lamaran</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($lamars as $lamar)
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">Lowongan :{{ $lamar->lowongan}}</p>
                          <p class="text-xs font-weight-bold mb-0">Gaji:{{ $lamar->gaji}}</p>
                          <p class="text-xs font-weight-bold mb-0">Deadline :{{ $lamar->selesai}}</p>
                          <p class="text-xs font-weight-bold mb-0">Kualifikasi :{{ $lamar->name_pendidikan}}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">Waktu :{{ $lamar->waktu}}</p>
                          <p class="text-xs font-weight-bold mb-0">Berkas: <a href="{{ asset('storage/' . $lamar->berkas)}}" style="color:red;">Lihat File</a></p>
                          <p class="text-xs font-weight-bold mb-0">Status:{{ $lamar->status}}</p>
                      </td>
                    </tr>
                    @endforeach  
                  </tbody>
                </table>
              </form>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection