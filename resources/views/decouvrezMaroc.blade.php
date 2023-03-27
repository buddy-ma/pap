@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'orange')
@section('bodyClasses', 'decouvrez homepage-3 the-search')

@section('css')

@endsection
@section('content')

    @include('landing.decouvrezMaroc.hero')

    @include('landing.decouvrezMaroc.catalogueConseilsMaroc')

@endsection
@section('js')

@endsection
