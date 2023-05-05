<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="PAP - Admin" name="description">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta content="PAP" name="author">
    <meta name="keywords" content="admin panel PAP" />
    <?php echo $__env->make('admin.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="app sidebar-mini">
    <!---Global-loader-->
    <div id="global-loader">
        <img src="<?php echo e(URL::asset('admin_assets/images/svgs/loader.svg')); ?>" alt="loader">
    </div>
    <!--- End Global-loader-->
    <!-- Page -->
    <div class="page">
        <div class="page-main">
            <?php echo $__env->make('admin.layouts.aside-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->yieldContent('page-header'); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </div><!-- End Page -->
            </div>
        </div>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>


    <?php echo $__env->make('admin.layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(Session::has('message')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Good Job...',
                text: '<?php echo e(session('message')); ?>',
            })
        </script>
    <?php elseif(Session::has('error')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo e(session('error')); ?>',
            })
        </script>
    <?php elseif(Session::has('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: '<?php echo e(session('success')); ?>',
            })
        </script>
    <?php endif; ?>
    <script>
        window.addEventListener('swal:modal', event => {
            new swal({
                title: event.detail.message,
                text: event.detail.text,
                icon: event.detail.type,
            })
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>