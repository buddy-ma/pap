@extends('layouts.app')
@section('title', 'Art')
@section('bodyClass', 'agency')
@section('content')

    @switch($design->type)
        @case(1)
            @include('designs.type1')
            @break
        @case(2)
            @include('designs.type2')
            @break
        @case(3)
            @include('designs.type3')
            @break
        @case(4)
            @include('designs.type4')
            @break
        @default
            @include('designs.type1')

    @endswitch

    @include('partials.footer')

@endsection

@section('js')
    <script src="{{ asset('assets/js/portfolio.js') }}"></script>
    <script src="{{ asset('assets/js/script7.js') }}"></script>
    <script src="{{ asset('assets/js/zoom-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/counters.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 400) {
                $("header").addClass("fixed");
                document.getElementById("logo").src = "../assets/images/logo/en_wh_art.png";
            } else {
                $("header").removeClass("fixed");
                document.getElementById("logo").src = "../assets/images/logo/en_art.png";
            }
        });
    </script>
@endsection

