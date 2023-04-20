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

        .hero-title {
            display: table-cell;
            height: 500px;
            padding: 10px;
            font-size: 40px;
            vertical-align: middle;
        }

        @media (max-width: 568px) {
            .row-reverse {
                flex-direction: row-reverse;

            }

            .no-mobile {
                display: none;
            }
        }
    </style>
@endsection
@section('content')

    @include('landing.hero', ['active' => 'achat', 'index' => true])

    @include('landing.index.catalogueProduits')

    @include('landing.index.catalogueConseils')

    {{-- @include('landing.index.villes') --}}

    @include('landing.index.catalogueConseilsMaroc')

    {{-- @include('landing.index.ilsParlentDeNous') --}}
    @include('partials.footer')

@endsection
@section('js')

@endsection
