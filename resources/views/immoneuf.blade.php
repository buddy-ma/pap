@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'green')
@section('bodyClasses', 'homepage-3 the-search')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/green.css') }}">

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

        .ville-tags {
            background: #18ba60 !important;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }
    </style>
@endsection
@section('content')

    @include('landing.immoneuf.hero')
    @include('landing.immoneuf.villes-tags')

    @include('landing.immoneuf.catalogueProduits')
    @include('landing.immoneuf.cataloguePromoteurs')

@endsection
@section('js')

@endsection
