
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>DBP | ITN</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/itn.png')); ?>" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/themefisher-font/style.css')); ?>">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/animate/animate.css')); ?>">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/slick/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/slick/slick-theme.css')); ?>">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-earth"></i>
					<span>Indonesia Trans Network</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="/">
						<!-- replace logo here -->
						<svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="150.94" y="325">I T N</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
				<?php if(auth()->guard()->check()): ?>
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo e(auth()->user()->name); ?> <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<?php if(auth()->user()->level==1): ?>
							<li><a href="/dashboard"><i class="tf-ion-home"> Dashboard</a></i></li>
							<?php endif; ?>
							<?php if(auth()->user()->level==2): ?>
							<li><a href="/dashboard"><i class="tf-ion-home"> Dashboard</a></i></li>
							<?php endif; ?>
							<?php if(auth()->user()->level==3): ?>
							<li><a href="/profil"><i class="tf-ion-person"> Profil</a></i></li>
							<li><a href="/lamaran"><i class="tf-ion-grid"> Lamaran</a></i></li>
							<?php endif; ?>
							<li role="separator" class="divider"></li>
							<li>
								<form action="/logout" method="post">
									<?php echo csrf_field(); ?>
									<button type="submit"><i class="tf-ion-log-out"> Logout</i></button>
								</form>
							</li>
						</ul>
					</li><!-- / Dashbaord -->

				<?php else: ?>
					<li class="dropdown cart-nav dropdown-slide">
						<a href="/login"><i class="tf-ion-log-in"></i> Login</a>
					</li><!-- / Login -->

					<li class="dropdown search dropdown-slide">
						<a href="/register"><i class="tf-ion-ios-android-persons"></i> Register</a>
					</li><!-- / Register -->

				<?php endif; ?>
				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('slide'); ?>
	<div class="container">
		<div class="row">
			<?php echo $__env->yieldContent('isi'); ?>
		</div>
	</div>

<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/itnlampung/">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/itn.net.id/">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/itnlampung">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UC3Z-YOokt8ekey5ZblBoOxg">
							<i class="tf-ion-social-youtube"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="/">HOME</a>
					</li>
					<li>
						<a href="/contact">CONTACT</a>
					</li>
					<li>
						<a href="/about">ABOUT</a>
					</li>
					<li>
						<a href="/posts">FIND JOB</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2022, Developed by <a href="/">Ahmad Dwi</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="<?php echo e(asset('assets/plugins/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 3.1 -->
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!-- Bootstrap Touchpin -->
    <script src="<?php echo e(asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')); ?>"></script>
    <!-- Instagram Feed Js -->
    <script src="<?php echo e(asset('assets/plugins/instafeed/instafeed.min.js')); ?>"></script>
    <!-- Video Lightbox Plugin -->
    <script src="<?php echo e(asset('assets/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')); ?>"></script>
    <!-- Count Down Js -->
    <script src="<?php echo e(asset('assets/plugins/syo-timer/build/jquery.syotimer.min.js')); ?>"></script>

    <!-- slick Carousel -->
    <script src="<?php echo e(asset('assets/plugins/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/slick/slick-animation.min.js')); ?>"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="<?php echo e(asset('plugins/google-map/gmap.js')); ?>"></script>

    <!-- Main Js File -->
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    


  </body>
  </html>
<?php /**PATH D:\lowongan-perusahaan\resources\views/layouts/main.blade.php ENDPATH**/ ?>