@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'orange')
@section('bodyClasses', 'decouvrez homepage-3 the-search')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/orange.css') }}">

    <style>
        .ville-tags {
            background: #ddd !important;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }

        .tags {
            background: #555 !important;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }
    </style>
@endsection
@section('content')

    @include('landing.decouvrezMaroc.hero')

    {{-- @include('landing.decouvrezMaroc.villes-tags') --}}

    {{-- @include('landing.tags') --}}

    @include('landing.index.catalogueConseilsMaroc')

    @include('landing.decouvrezMaroc.catalogueConseilsMaroc')

@endsection
@section('js')
    <script>
        function tags($t) {
            $('#search').val($t);
            $('#decouvrezMaroc').submit();
        }
    </script>
@endsection
