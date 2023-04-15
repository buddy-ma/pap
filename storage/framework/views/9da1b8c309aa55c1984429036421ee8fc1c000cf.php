<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="pap website">
    <meta name="author" content="">
    <title>PAP - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CPoppins:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-5-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/leaflet.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/leaflet-gesture-handling.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/leaflet.markercluster.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/leaflet.markercluster.default.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/search-form.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/search.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/timedropper.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/datedropper.css')); ?>">
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
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="<?php echo $__env->yieldContent('bodyClasses'); ?>">
    <div id="wrapper">
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    </div>

    <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rangeSlider.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/range-slider.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/mmenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/mmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fitvids.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/timedropper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datedropper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jqueryadd-count.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/leaflet.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/leaflet-gesture-handling.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/leaflet-providers.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/leaflet.markercluster.js')); ?>"></script>
    

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
    <script src="<?php echo e(asset('assets/js/inner.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>

    <script>
        $('.slick-lancers').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }, ]
        });
    </script>
    <script>
        $('.slick-lancers2').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }, ]
        });
    </script>
    <script>
        $('.slick-blogs').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }, ]
        });
    </script>
    <script>
        $('.slick-villes').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }, ]
        });
    </script>
    <script>
        $('.job_clientSlide').owlCarousel({
            items: 2,
            loop: true,
            margin: 30,
            autoplay: false,
            nav: true,
            smartSpeed: 1000,
            slideSpeed: 1000,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                991: {
                    items: 2
                }
            }
        });
    </script>

    <script>
        $(".dropdown-filter").on('click', function() {
            $(".explore__form-checkbox-list").toggleClass("filter-block");
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    <script>
        function villeTag(t) {
            $('#form_ville').val(t);
            $('#heroForm').submit();
        }
    </script>
    <?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/layouts/app.blade.php ENDPATH**/ ?>