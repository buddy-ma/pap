<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Dashboard</h4>
        </div>
    </div>
    <!--End Page header-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card-header">
        <h3 class="card-title">Produits</h3>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Produits </p>
                    <h2 class="mb-1 number-font"><?php echo e($products_count); ?></h2>
                </div>
                <div id="spark1"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Active Produits </p>
                    <h2 class="mb-1 number-font"><?php echo e($active_products_count); ?></h2>
                </div>
                <div id="spark2"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Desactive Produits </p>
                    <h2 class="mb-1 number-font"><?php echo e($desactive_products_count); ?></h2>
                </div>
                <div id="spark3"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Vues de Produits </p>
                    <h2 class="mb-1 number-font"><?php echo e($products_vues_count); ?></h2>
                </div>
                <div id="spark4"></div>
            </div>
        </div>
    </div>
    <!-- Row-1 -->
    <div class="card-header">
        <h3 class="card-title">Conseils</h3>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Total Blogs</p>
                    <h2 class="mb-1 number-font"><?php echo e($total_conseils); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Nouveaux Blogs</p>
                    <h2 class="mb-1 number-font"><?php echo e($new_conseils); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Désactive Blogs</p>
                    <h2 class="mb-1 number-font"><?php echo e($disabled_conseils); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Vues </p>
                    <h2 class="mb-1 number-font"><?php echo e($total_vues_conseils); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-1 -->

    <div class="card-header">
        <h3 class="card-title">Découvrez le maroc</h3>
    </div>

    <!-- Row-2 -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Total Blogs</p>
                    <h2 class="mb-1 number-font"><?php echo e($total_dm); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Nouveaux Blogs</p>
                    <h2 class="mb-1 number-font"><?php echo e($new_dm); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Désactive Blogs</p>
                    <h2 class="mb-1 number-font"><?php echo e($disabled_dm); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Vues</p>
                    <h2 class="mb-1 number-font"><?php echo e($total_vues_dm); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-2 -->

    <div class="row">
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top Conseils</h3>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $top_conseils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conseil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-card">
                            <span class="bg-warning list-bar"></span>
                            <div class="row align-items-center">
                                <div class="col-9 col-sm-9">
                                    <div class="media mt-0">
                                        <span class="avatar brround avatar-md mr-3">
                                            <i class="las la-thumbs-up"></i>
                                        </span>
                                        <div class="media-body">
                                            <div class="d-md-flex align-items-center mt-1">
                                                <h6 class="mb-1"><?php echo e(substr($conseil->title, 0, 30)); ?>...</h6>
                                            </div>
                                            <?php if($conseil->status == 1): ?>
                                                <span class="text-success fs-13 font-weight-semibold">Active</span>
                                            <?php else: ?>
                                                <span class="text-danger fs-13 font-weight-semibold">Désactive</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3">
                                    <div class="text-right">
                                        <span class="font-weight-semibold fs-16 number-font"><?php echo e($conseil->vues); ?>

                                            vues</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top Découvrez le maroc</h3>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $top_dm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-card">
                            <span class="bg-warning list-bar"></span>
                            <div class="row align-items-center">
                                <div class="col-9 col-sm-9">
                                    <div class="media mt-0">
                                        <span class="avatar brround avatar-md mr-3">
                                            <i class="las la-thumbs-up"></i>
                                        </span>
                                        <div class="media-body">
                                            <div class="d-md-flex align-items-center mt-1">
                                                <h6 class="mb-1"><?php echo e(substr($dm->title, 0, 30)); ?>...</h6>
                                            </div>
                                            <?php if($dm->status == 1): ?>
                                                <span class="text-success fs-13 font-weight-semibold">Active</span>
                                            <?php else: ?>
                                                <span class="text-danger fs-13 font-weight-semibold">Désactive</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3">
                                    <div class="text-right">
                                        <span class="font-weight-semibold fs-16 number-font"><?php echo e($dm->vues); ?>

                                            vues</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="col-xl-4  col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <p class=" mb-1 fs-14">Total Blogs</p>
                            <h2 class="mb-0"><span class="number-font1"><?php echo e($blogs_count); ?></span>
                            </h2>

                        </div>
                        <span class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                class="las la-thumbs-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <p class=" mb-1 fs-14">Total Vues</p>
                            <h2 class="mb-0"><span class="number-font1"><?php echo e($vues_count); ?></span>
                            </h2>
                        </div>
                        <span class="text-info fs-35 dash1-iocns bg-info-transparent border-info"><i
                                class="las la-eye"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <p class=" mb-1 fs-14">Total Villes</p>
                            <h2 class="mb-0"><span class="number-font1"><?php echo e($villes_count); ?></span>
                            </h2>
                        </div>
                        <span class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                class="las la-map-pin"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End row-->

    </div>
    </div>
    <!-- End app-content-->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(URL::asset('admin_assets/js/index1.js')); ?>"></script>

    <!--INTERNAL Peitychart js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/peitychart/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/peitychart/peitychart.init.js')); ?>"></script>

    <!--INTERNAL Apexchart js-->
    <script src="<?php echo e(URL::asset('admin_assets/js/apexcharts.js')); ?>"></script>

    <!--INTERNAL ECharts js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/echarts/echarts.js')); ?>"></script>

    <!--INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Select2 js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/select2.js')); ?>"></script>

    <!--INTERNAL Moment js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/moment/moment.js')); ?>"></script>

    <!--INTERNAL Index js-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/mains-admin/statistics/dashboard.blade.php ENDPATH**/ ?>