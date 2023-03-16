@extends('layouts.app')
@section('title', 'Links')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="{{ asset('assets/css/color-9.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy'.$ar.'.css') }}" rel="stylesheet" type="text/css">
    <style>

    </style>
@endsection
@section('content')


<!--breadcrumb section start-->
<section class="agency breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12"><h2 class="breadcrumb-text text-center">Design Tools</h2>
                <ul class="breadcrumb justify-content-center">

                    <li><a>Design Tools</a></li>
                    <li>{{ $data->title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->


<!-- section start -->
<section class="portfolio-section titles masonray-sec zoom-gallery">

    <div class="container">
        <div class="isotopeContainer row">
            @foreach ($data->tool_links as $link)
                <div class="col-lg-3 col-md-4 col-sm-6 isotopeSelector shoes">
                    <div class="overlay">
                        <div class="border-portfolio">
                            <div class="overlay-background">
                                <a href="{{ $link->link }}" target="_blank"><i aria-hidden="true" class="fa fa-link"></i></a>
                            </div>
                            <img alt="Link" class="img-fluid" src="{{URL::asset('storage/tools/links/'.$link->image)}}">
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3 class="head-text">
                            {{$link->title}}
                        </h3>
                        <h6 class="head-sub-text">
                            {{$link->type}}
                        </h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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

