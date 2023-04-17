@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'red')
@section('bodyClasses', 'conseils homepage-3 the-search')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/red.css') }}">

    <style>
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

    @include('landing.conseils.hero')
    @include('landing.tags')
    @include('landing.conseils.catalogueConseilsMaroc')

@endsection
@section('js')
    <script>
        function tags($t) {
            console.log($t);
            $('#search').val($t);
            $('#decouvrezMaroc').submit();
        }
    </script>
@endsection
