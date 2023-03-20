@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('css')

@endsection
@section('content')

    @include('landing.index.hero')

    @include('landing.index.catalogueProduits')

    @include('landing.index.catalogueConseils')

    @include('landing.index.catalogueConseilsMaroc')

    @include('landing.index.villes')

    @include('landing.index.testimonials')

@endsection
@section('js')

@endsection
