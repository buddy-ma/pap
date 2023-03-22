@extends('layouts.app')
@section('title', 'Blog')
@section('logo', 'blue')
@section('bodyClasses', 'th-8 homepage-4 hp-6 hd-white')

@section('css')
    <link rel="stylesheet" id="color" href="{{ asset('assets/css/colors/blue.css') }}">
    <style>
        .img-responsive {
            display: inline-block;
            max-width: 100%;
            width: 100%;
            max-height: 200px !important;
            height: auto;
        }

        .info i {
            font-size: 18px !important;
            line-height: 40px !important;
            color: #fff;
            border-radius: 100px;
            width: 40px;
            height: 40px;
            text-align: center;
            padding-bottom: 10px;
            background: #0098ef;
        }

        .info p {
            font-size: 18px !important;
            line-height: 50px !important;
            padding-bottom: 10px;
            font-weight: 500;
            color: #333;
        }
    </style>
@endsection
@section('content')

    @include('landing.commercialiser.hero')

    @include('static.apropos')

@endsection
@section('js')

@endsection
