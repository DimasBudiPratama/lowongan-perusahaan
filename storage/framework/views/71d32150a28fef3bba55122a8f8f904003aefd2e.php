<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Login | ITN</title>

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

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <img src="<?php echo e(asset('assets/images/itn.png')); ?>" width="200px" height="80px" class="text-center" alt="">
          </a>
          <h2 class="text-center">Silahkan Login</h2>
          <?php if(session()->has('success')): ?>
          <div class="alert alert-success alert-common alert-dismissible " role="alert">
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            	<i class="tf-ion-thumbsup"></i><span><?php echo e(session('success')); ?></span>
		      </div>
          <?php endif; ?>
          <?php if(session()->has('error')): ?>
          <div class="alert alert-danger alert-common alert-dismissible " role="alert">
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            	<i class="tf-ion-close-circled"></i><span><?php echo e(session('error')); ?></span>
		      </div>
          <?php endif; ?>
          <form class="text-left clearfix" action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Email" required autocomplete="email" autofocus>
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                  <?php echo e($message); ?>

                </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="password" name="password" required autocomplete="current-password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                  <label class="form-check-label" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                  </label>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center" >Login</button>
            </div>
          </form>
          <p class="mt-20">Belum Punya akun ?<a href="/register"> Create New Account</a></p>
          <!-- <p class="mt-20"><a href="/">Back to Blog</a></p> -->
        </div>
      </div>
    </div>
  </div>
</section>

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
  </html><?php /**PATH D:\lowongan-perusahaan\resources\views/auth/login.blade.php ENDPATH**/ ?>