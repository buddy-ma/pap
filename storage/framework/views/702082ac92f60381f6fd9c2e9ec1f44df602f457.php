<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Soukaina - Portfolio" name="description">
    <meta content="Soukaina - Portfolio" name="author">
    <meta name="keywords" content="Soukaina - Portfolio" />
    <?php echo $__env->make('admin.layouts.custom-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="h-100vh"
    style="background-color: #rgb(44, 135, 138); background-image: url('<?php echo e(URL::asset('assets/images/bg.jpg')); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('admin.layouts.custom-footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\BUDDY\OneDrive\Desktop\soukaina-portfolio\resources\views/admin/layouts/master2.blade.php ENDPATH**/ ?>