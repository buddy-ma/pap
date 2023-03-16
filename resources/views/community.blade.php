@extends('layouts.app')
@section('title', 'Art')
@section('bodyClass', 'agency')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="{{ asset('assets/css/color-7.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/inner-page.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy' . $ar . '.css') }}" rel="stylesheet" type="text/css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        .dropdown img {
            width: 16px;
            height: 16px;
            display: block;
        }

        header.nav-abs {
            position: fixed;
            top: 0;
            padding: 20px 0;
        }

        header nav ul li>a {
            color: black;
        }

        .portfolio-metro h1 {
            font-size: 80px;
            margin-bottom: 100px;
        }

        .app2.fixed ul li>a {
            color: white;
        }

        .app2.fixed ul li a ul li a {
            color: #000;
        }

        .com-modal .modal-content {
            background: url('{{ asset('assets/images/modal.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            height: 720px;
        }

        .com-modal .join {
            text-align: center;
            position: relative;
            top: 75%;
        }

        .com-modal .join h3 {
            font-size: 40px;
            margin-bottom: 20px;
            font-family: 'Pacifico', cursive;
        }

        .com-modal2 .modal-content {
            background: url('{{ asset('assets/images/modal2.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            height: 720px;
            width: 600px;
        }

        .com-modal2 .join {
            text-align: center;
            padding: 80px 50px;
        }

        .com-modal2 .join h3 {
            font-size: 30px;
            margin-bottom: 50px;
            font-family: 'Pacifico', cursive;
        }

        .com-modal2 .join input {
            font-size: 16px;
            padding: 10px 5px;
            border: 1px solid #000;
        }
    </style>
@endsection
@section('content')

    <!--breadcrumb section start-->
    <section class="portfolio-metro bg p-b-0">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 text-center ">
                        <div class="portfolio_section">
                            <div>
                                <h1 class="breadcrumb-text"> {!! __('art.header_title') !!}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <img alt="" class="img-fluid man" src="../assets/images/portfolio/portfolio-new/avatar.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <section class="event team-sec speaker set-relative" id="speaker">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 speker-container">
                    <div class="text-center">
                        <div class="team-img">
                            <img alt="" class="img-fluid" src="../assets/images/event/l3-1.png">
                            <div class="overlay"></div>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-google center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="employee">
                            <h5 class="e-name text-center">Vicky Smith</h5>
                            <h6 class="post text-center ">UI/UX Designer - Little Big</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 speker-container">
                    <div class="text-center">
                        <div class="team-img">
                            <img alt="" class="img-fluid" src="../assets/images/event/l3-1.png">
                            <div class="overlay"></div>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-google center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="employee">
                            <h5 class="e-name text-center">Vicky Smith</h5>
                            <h6 class="post text-center ">UI/UX Designer - Little Big</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 speker-container">
                    <div class="text-center">
                        <div class="team-img">
                            <img alt="" class="img-fluid" src="../assets/images/event/l3-1.png">
                            <div class="overlay"></div>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-google center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="employee">
                            <h5 class="e-name text-center">Vicky Smith</h5>
                            <h6 class="post text-center ">UI/UX Designer - Little Big</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 speker-container">
                    <div class="text-center">
                        <div class="team-img">
                            <img alt="" class="img-fluid" src="../assets/images/event/l3-1.png">
                            <div class="overlay"></div>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-google center-content"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="employee">
                            <h5 class="e-name text-center">Vicky Smith</h5>
                            <h6 class="post text-center ">UI/UX Designer - Little Big</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- com-modal section start -->
    <div class="com-modal">
        <div aria-hidden="true" class="modal fade" id="com-modal" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="join">
                        <h3>Welcome home, Buddy</h3>
                        <a href="{{ route('join') }}">
                            <button data-bs-toggle="modal" class="btn btn-default primary-btn me-3">Join</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- com-modal section end -->



@endsection
@section('js')
    <script src="{{ asset('assets/js/portfolio.js') }}"></script>
    <script src="{{ asset('assets/js/script7.js') }}"></script>
    <script src="{{ asset('assets/js/zoom-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/counters.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#com-modal').modal('show');
        });
    </script>
@endsection
