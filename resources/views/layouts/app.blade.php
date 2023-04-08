<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="pap website">
    <meta name="author" content="">
    <title>PAP - @yield('title')</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CPoppins:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/search-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('assets/css/default.css') }}">
    @yield('css')
</head>

<body class="@yield('bodyClasses')">
    <div id="wrapper">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    </div>

    <!-- START PRELOADER -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div> --}}
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/mmenu.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/aos2.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/fitvids.js') }}"></script>
    <script src="{{ asset('assets/js/fitvids.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/searched.js') }}"></script>
    <script src="{{ asset('assets/js/forms-2.js') }}"></script>
    <script src="{{ asset('assets/js/range.js') }}"></script>
    <script src="{{ asset('assets/js/color-switcher.js') }}"></script>
    <script>
        $(window).on('scroll load', function() {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });
    </script>
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

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
    @if (Session::has('message'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Good Job...',
                text: '{{ session('message') }}',
            })
        </script>
    @elseif(Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            })
        </script>
    @elseif(Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: '{{ session('success') }}',
            })
        </script>
    @endif
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- END HEADER SEARCH -->

    @yield('js')

</body>

</html>
