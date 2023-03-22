@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'blue')
@section('bodyClasses', 'homepage-3 the-search')

@section('css')

@endsection
@section('content')

    @include('landing.index.hero')

    @include('landing.index.catalogueProduits')

    @include('landing.index.catalogueConseils')

    @include('landing.index.catalogueConseilsMaroc')

    {{-- @include('landing.index.ilsParlentDeNous') --}}

@endsection
@section('js')

@endsection
