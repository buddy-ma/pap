@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'red')
@section('bodyClasses', 'conseils homepage-3 the-search')

@section('css')

@endsection
@section('content')

    @include('landing.conseils.hero')

    @include('landing.conseils.catalogueConseilsMaroc')

@endsection
@section('js')

@endsection
