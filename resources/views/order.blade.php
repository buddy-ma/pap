@extends('layouts.app')
@section('title', 'Order')
@section('bodyClass', 'agency')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="{{ asset('assets/css/color-7.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy' . $ar . '.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/inner-page.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet" type="text/css">
    <style>
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

        .toggle {
            align-items: center;
            border-radius: 100px;
            display: flex;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .toggle:last-of-type {
            margin: 0;
        }

        .toggle__input {
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .toggle__input:not([disabled]):active+.toggle-track,
        .toggle__input:not([disabled]):focus+.toggle-track {
            border: 1px solid transparent;
            box-shadow: 0px 0px 0px 2px #222;
        }

        .toggle__input:disabled+.toggle-track {
            cursor: not-allowed;
            opacity: 0.7;
        }

        .toggle-track {
            background: #ccc;
            border: 1px solid #fff;
            border-radius: 100px;
            cursor: pointer;
            display: flex;
            height: 30px;
            margin-right: 12px;
            position: relative;
            width: 60px;
        }

        .toggle-indicator {
            align-items: center;
            background: #222;
            border-radius: 24px;
            bottom: 2px;
            display: flex;
            height: 24px;
            justify-content: center;
            left: 2px;
            outline: solid 2px transparent;
            position: absolute;
            transition: 0.5s;
            width: 24px;
        }

        .checkMark {
            fill: #fff;
            height: 20px;
            width: 20px;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .toggle__input:checked+.toggle-track .toggle-indicator {
            background: #222;
            transform: translateX(30px);
        }

        .toggle__input:checked+.toggle-track .toggle-indicator .checkMark {
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .checked {
            background: #222;
        }

        .checked a {
            color: #fff !important;
        }
    </style>

@endsection
@section('content')

    @isset($header)
        @include('dynamic.header.order_header')
    @else
        <section class="agency breadcrumb-section p-9">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-text text-center">Order Now</h2>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <!-- section start -->
    @livewire('client-order')

    <!-- Section ends -->

@endsection
@section('js')
    <script src="{{ asset('assets/js/portfolio.js') }}"></script>
    <script src="{{ asset('assets/js/script7.js') }}"></script>
    <script src="{{ asset('assets/js/zoom-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/counters.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/product.js') }}"></script>
@endsection
