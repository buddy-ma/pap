@extends('layouts.app')
@section('title', 'Commercialiser')
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

        p {
            text-align: left !important;
        }
    </style>
@endsection
@section('content')

    @include('landing.commercialiser.hero')

    @isset($page)
        @include('landing.commercialiser.apropos')
    @else
        @include('static.apropos')
    @endisset

@endsection
@section('js')

@endsection
