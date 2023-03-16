<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Unice" name="description">
    <meta content="Unice" name="keywords">
    <meta content="Unice" name="author">
    <title>PAP - <?php echo $__env->yieldContent('title'); ?></title>

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
    <script src="https://kit.fontawesome.com/5a7f4b52ce.js" crossorigin="anonymous"></script>

    <!-- flat Icons -->
    <link href="<?php echo e(asset('assets/css/flaticon.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo \Livewire\Livewire::styles(); ?>

    <!--magnific popup css-->
    <link href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <style>
        @font-face {
            font-family: "JosefinSans";
            src: url("assets/fonts/JosefinSans.ttf");
        }

        @font-face {
            font-family: "kiona";
            src: url("assets/fonts/Kiona-Regular.ttf");
            src: url('assets/fonts/kiona-regular-webfont.woff') format("woff");
        }

        .nav-container .checkbox {
            position: absolute;
            display: block;
            height: 32px;
            width: 32px;
            top: 0px;
            right: 17px;
            z-index: 5;
            opacity: 0;
            cursor: pointer;
        }

        .nav-container .hamburger-lines {
            display: block;
            height: 20px;
            width: 25px;
            position: absolute;
            top: 5px;
            right: 20px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .nav-container .hamburger-lines .line {
            display: block;
            height: 1px;
            width: 100%;
            border-radius: 10px;
            background: #fff;
        }

        .app2.fixed .hamburger-lines .line {
            background: #000;
        }

        .nav-container .hamburger-lines .line1 {
            transform-origin: 0% 0%;
            transition: transform 0.4s ease-in-out;
        }

        .nav-container .hamburger-lines .line2 {
            transition: transform 0.2s ease-in-out;
        }

        .nav-container .hamburger-lines .line3 {
            transform-origin: 0% 100%;
            transition: transform 0.4s ease-in-out;
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line1 {
            transform: rotate(45deg);
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
            transform: scaleY(0);
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
            transform: rotate(-45deg);
        }

        .nav-container input[type="checkbox"]:checked+.navbar {
            left: 0px !important;
        }
    </style>
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
        var initialSrc = "../../assets/images/logo.svg";
        var scrollSrc = "../../assets/images/logo_wh.svg";

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
    <script type="text/javascript">
        function hamburger() {
            console.log('here');
            // Get the checkbox
            var checkBox = document.getElementById("btn-ham");
            // If the checkbox is checked, display the output text
            if (checkBox.checked == true) {
                $(".navbar").css("left", "0px");
            } else {
                $(".navbar").css("left", "-350px");
            }
        }
    </script>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>