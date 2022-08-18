
<?php $__env->startSection('judul','Dashboard'); ?>
<?php $__env->startSection('isi'); ?>
        <div class="col-lg-6 col-sm-5">
            <div class="card mb-2">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">category</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Kategori Lowongan</p>
                    <h4 class="mb-0"><?php echo e($categories); ?></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    
                </div>
            </div>
            <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">work</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Lowongan Tersedia</p>
                    <h4 class="mb-0"><?php echo e($posts); ?></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                   
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-5 mt-sm-0 mt-4">
            <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Lowongan Masuk</p>
                    <h4 class="mb-0 "><?php echo e($lamars); ?></h4>
                    </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                    
                </div>
            </div>
            <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Pelamar</p>
                    <h4 class="mb-0 "><?php echo e($pelamars); ?></h4>
                    </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                    
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.dalem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lowongan-perusahaan\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>