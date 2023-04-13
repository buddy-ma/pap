@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'purple')
@section('bodyClasses', 'homepage-3 the-search')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/purple.css') }}">

    <style>
        .ville h4 {
            position: relative;
            top: 110px;
            background: rgb(52 52 52 / 50%);
            line-height: 60px !important;
        }

        .ville:hover h4 {
            background: none !important;
        }
    </style>
@endsection
@section('content')

    @include('landing.hero', ['active' => 'location'])


    @include('landing.location.catalogueProduits')

@endsection
@section('js')

@endsection
