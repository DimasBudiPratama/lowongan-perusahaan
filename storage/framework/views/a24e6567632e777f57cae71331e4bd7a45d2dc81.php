
<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/dashboard/img/apple-icon.png')); ?>">
<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/itn.png')); ?>">

<title>
  
  <?php echo e($title); ?>


</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="<?php echo e(asset('assets/dashboard/css/nucleo-icons.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('assets/dashboard/css/nucleo-svg.css')); ?>" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->

<link id="pagestyle" href="<?php echo e(asset('assets/dashboard/css/material-dashboard.css?v=3.0.4')); ?>" rel="stylesheet" />

<!-- Toggle Button Status -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>


<!-- Trix Editor -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/dashboard/css/trix.css')); ?>">

<style>
  trix-toolbar [data-trix-button-group="file-tools"] {
    display: none;
  }
  trix-toolbar [data-trix-attribute="bullet"] {
    display: none;
  }
  trix-toolbar [data-trix-attribute="number"] {
    display: none;
  }
</style>

</head>

<body class="g-sidenav-show  bg-gray-100">

    <?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    <?php echo $__env->make('dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="row">
               <?php echo $__env->yieldContent('isi'); ?>
            </div>
        </div>
    </div>

    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                    document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold" target="_blank">Ahmad Dwi</a>
                for a better web.
                </div>
            </div>
            </div>
        </div>
    </footer>
</main>
    
<!--   Core JS Files   -->
<script src="<?php echo e(asset('assets/dashboard/js/core/popper.min.js')); ?>" ></script>
<script src="<?php echo e(asset('assets/dashboard/js/core/bootstrap.min.js')); ?>" ></script>
<script src="<?php echo e(asset('assets/dashboard/js/plugins/perfect-scrollbar.min.js')); ?>" ></script>
<script src="<?php echo e(asset('assets/dashboard/js/plugins/smooth-scrollbar.min.js')); ?>" ></script>

<!-- Trix Editor -->
<script type="text/javascript" src="<?php echo e(asset('assets/dashboard/js/trix.js')); ?>"></script>


<!-- <script type="text/javascript" src="<?php echo e(asset('assets/dashboard/js/jquery-3.5.1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/dashboard/js/sweetalert.min')); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- <script>
	function hanyaAngka(event) {
		var angka = (event.which) ? event.which : event.keyCode
		if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
			return false;
		return true;
	}
</script> -->

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="<?php echo e(asset('assets/dashboard/js/material-dashboard.min.js?v=3.0.4')); ?>"></script>
  </body>

</html>
<?php /**PATH D:\lowongan-perusahaan\resources\views/dashboard/layouts/dalem.blade.php ENDPATH**/ ?>