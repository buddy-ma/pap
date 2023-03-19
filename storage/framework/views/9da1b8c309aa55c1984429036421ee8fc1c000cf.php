<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>FindHouses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-5-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/search-form.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/search.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lightcase.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.css')); ?>">
    <link rel="stylesheet" id="color" href="<?php echo e(asset('assets/css/default.css')); ?>">
</head>

<body class="homepage-3 the-search">
    <div id="wrapper">
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rangeSlider.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/mmenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/mmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fitvids.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fitvids.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/smooth-scroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lightcase.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/search.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/newsletter.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.form.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/searched.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/forms-2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/range.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/color-switcher.js')); ?>"></script>
    <script>
        $(window).on('scroll load', function() {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });
    </script>

    <script>
        $(".dropdown-filter").on('click', function() {
            $(".explore__form-checkbox-list").toggleClass("filter-block");
        });
    </script>

    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/layouts/app.blade.php ENDPATH**/ ?>