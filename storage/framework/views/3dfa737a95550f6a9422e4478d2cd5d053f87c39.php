
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
    <img src="<?php echo e(asset('assets/dashboard/img/logo-ct.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white"><?php echo e(auth()->user()->name); ?></span>
				<span class="text-white">
					<?php if(auth()->user()->level==1): ?>
						<td class="align-middle text-center text-sm">
                        	<span class="badge badge-sm bg-gradient-success">HRD</span>
                      	</td>
					<?php elseif(auth()->user()->level==2): ?>
						<td class="align-middle text-center text-sm">
                        	<span class="badge badge-sm bg-gradient-info">Manajer</span>
                      	</td>
					<?php endif; ?>
				</span>
  </a>
</div>
<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">

        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Dashboard</h6>
        </li>

        <li class="nav-item">
				<a class="nav-link text-white <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" href="/dashboard">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">house</i>
					<span class="sidenav-normal  ms-2  ps-1"> Dashboard </span>
				</a>
		</li>
		<li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Lowongan</h6>
        </li>
        <li class="nav-item">
				<a class="nav-link text-white <?php echo e(Request::is('dashboard/posts*') ? 'active' : ''); ?>" href="/dashboard/posts">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
					<span class="sidenav-normal  ms-2  ps-1"> Lowongan </span>
				</a>
		</li>

		<?php if(auth()->user()->level==1): ?>
        <li class="nav-item">
				<a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
					<span class="nav-link-text ms-2 ps-1">Data Master</span>
				</a>
				<div class="collapse " id="pagesExamples">
					<ul class="nav ">
						<li class="nav-item ">
							<a class="nav-link text-white <?php echo e(Request::is('pendidikan*') ? 'active' : ''); ?>" href="/pendidikan">
								<span class="sidenav-mini-icon"> DP </span>
								<span class="sidenav-normal  ms-2  ps-1"> Data Pendidikan </span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link text-white <?php echo e(Request::is('keahlian*') ? 'active' : ''); ?>" href="/keahlian">
								<span class="sidenav-mini-icon"> DK </span>
								<span class="sidenav-normal  ms-2  ps-1"> Data Keahlian </span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link text-white <?php echo e(Request::is('category*') ? 'active' : ''); ?>" href="/category">
								<span class="sidenav-mini-icon"> DK </span>
								<span class="sidenav-normal  ms-2  ps-1"> Data Kategori </span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link text-white <?php echo e(Request::is('user*') ? 'active' : ''); ?> " href="/user">
								<span class="sidenav-mini-icon"> DU </span>
								<span class="sidenav-normal  ms-2  ps-1"> Data User </span>
							</a>
						</li>
					</ul>
				</div>
		</li>
		
        <li class="nav-item">
				<a class="nav-link text-white" href="/dashboard/jadwal">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">notifications</i>
					<span class="sidenav-normal  ms-2  ps-1"> Jadwal </span>
				</a>
		</li>
		<?php endif; ?>
        <li class="nav-item">
				<a class="nav-link text-white" href="/dashboard/lamaran">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
					<span class="sidenav-normal  ms-2  ps-1"> Pelamar </span>
				</a>
		</li>
		
  </ul>
</div>

</div>

</aside>
<?php /**PATH D:\lowongan-perusahaan\resources\views/dashboard/layouts/navbar.blade.php ENDPATH**/ ?>