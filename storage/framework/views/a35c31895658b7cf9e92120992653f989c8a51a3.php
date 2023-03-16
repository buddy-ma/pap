<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Unice" name="description">
    <meta content="Unice" name="keywords">
    <meta content="Unice" name="author">
    <title>Soukaina - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fav icon -->
    <link href="<?php echo e(asset('assets/images/logo/favicon.png')); ?>" rel="shortcut icon">

    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

    <!--bootstrap css-->
    <link href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css">

    <!--keyframe css-->
    <link href="<?php echo e(asset('assets/css/keyframes.css')); ?>" rel="stylesheet">

    <!--owl carousel css-->
    <link href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="<?php echo e(asset('assets/css/aos.css')); ?>" rel="stylesheet">

    <!-- Icons -->
    <link href="<?php echo e(asset('assets/css/fontawesome.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/themify.css')); ?>" rel="stylesheet" type="text/css">

    <!-- flat Icons -->
    <link href="<?php echo e(asset('assets/css/flaticon.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo \Livewire\Livewire::styles(); ?>

    <!--magnific popup css-->
    <link href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <!-- color css -->
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body data-offset="50" data-spy="scroll" data-bs-target=".navbar" class="<?php echo $__env->yieldContent('bodyClass'); ?> ">
    <!--loader start>
        <div class="loader-wrapper">
            <div class="loader">
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
        </div>-->
    
    
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- all js here -->
    <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>

    <!-- popper js-->
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('assets/js/bootstrap.js')); ?>"></script>
    <!--  costamizer option -->
    <script src="<?php echo e(asset('assets/js/custamizer-option.js')); ?>"></script>

    <!--magnific popup js-->
    <script src="<?php echo e(asset('assets/js/magnific-popup.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/isotope.min.js')); ?>"></script>

    <!--owl js-->
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/typed.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.waypoints.min.js')); ?>"></script>
    <!-- AOS JS -->
    <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>

    <!-- tilt JS -->
    <script src="<?php echo e(asset('assets/js/vanilla-tilt.min.js')); ?>"></script>

    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- script js-->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos-init.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/layout-fix.js')); ?>"></script>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php echo $__env->yieldContent('js'); ?>
    <?php if(Session::has('message')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Good Job...',
                text: '<?php echo e(session('message')); ?>',
            })
        </script>
    <?php elseif(Session::has('thankyou')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thank you',
                text: '<?php echo e(session('thankyou')); ?>',
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
    <script>
        var initialSrc = "../../assets/images/logo_wh.svg";
        var scrollSrc = "../../assets/images/logo.svg";

        $(window).scroll(function() {
            if ($(window).scrollTop()) {
                $('header').removeClass('nav-down').addClass('nav-up');
                $("#logo").attr("src", initialSrc);
            } else {
                $('header').removeClass('nav-up').addClass('nav-down');
                $("#logo").attr("src", scrollSrc);
            }
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/layouts/app.blade.php ENDPATH**/ ?>