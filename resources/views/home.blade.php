@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'blue')
@section('bodyClasses', 'homepage-3 the-search')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">

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

    @include('landing.hero', ['active' => 'achat'])

    @include('landing.index.catalogueProduits')

    @include('landing.index.catalogueConseils')

    {{-- @include('landing.index.villes') --}}

    @include('landing.index.catalogueConseilsMaroc')

    {{-- @include('landing.index.ilsParlentDeNous') --}}

@endsection
@section('js')

@endsection
