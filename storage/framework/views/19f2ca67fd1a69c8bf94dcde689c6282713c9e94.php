
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
<div class="row">
    <div class="col-6 col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="h2 m-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline text-blue"></i> 01</div>
                <div class="text-muted mb-0"><a href="/admin/online"> Online</a></div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="h2 m-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline text-green"></i> 100</div>
                <div class="text-muted mb-0"><a href="/admin/order/finished"> Total Customers</a></div>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="h2 m-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline text-red"></i>01 </div>
                <div class="text-muted mb-0"><a href="/admin/order/finished">Blocked Customers<a></div>
            </div>
        </div>
    </div>
</div>


<!--Row-->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Top Product Sales Overview</h3>
                <div class="card-options">
                    <a class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item sales" data-id="today">Today</a>
                        <a class="dropdown-item sales" data-id="lastweek">Last Week</a>
                        <a class="dropdown-item sales" data-id="lastmonth">Last Month</a>
                        <a class="dropdown-item sales" data-id="lastyear">Last Year</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End row-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/admin/mains-admin/statistics/dashboard.blade.php ENDPATH**/ ?>