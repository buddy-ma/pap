@extends('layouts.app')
@section('title', $ville->title)
@section('logo', 'blue')
@section('bodyClasses', 'inner-pages hd-white')

@section('css')
    <style>
        .img-responsive {
            display: inline-block;
            max-width: 100%;
            width: 100%;
            max-height: 200px !important;
            height: auto;
        }
    </style>
@endsection
@section('content')

    {{-- <section class="headings">
        <div class="text-heading text-center">
        </div>
    </section> --}}

    <section class="blog blog-section bg-white mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="news-item details no-mb2">
                        <div class="news-item-text details pb-0">
                            <h2>{{ $ville->title }}</h2>
                            <div class="dates">
                                <span class="date">{{ $ville->updated_at->translatedFormat('F j, Y') }}</span>
                            </div>
                            <div class="news-item-descr big-news details visib mb-0">
                                <p>
                                    {!! $ville->text !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.decouvrezMaroc.villeBlogs')

    @isset($ville->video)
        <div class="container">
            <div class="property wprt-image-video w50 pro vid-si2">
                <h5>Video</h5>
                <div style="position:relative;padding-top:56.25%;">
                    <iframe src="{{ $ville->video }}" frameborder="0" allowfullscreen
                        style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                </div>
            </div>
        </div>
    @endisset

    <!-- START FOOTER -->
    <footer class="first-footer ">
        <div class="top-footer bg-blue w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Achat</h3>
                            <div class="nav-footer">
                                <ul>
                                    @foreach ($achat_links as $ach)
                                        <li><a href="{{ $ach->link }}">{{ $ach->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Location</h3>
                            <div class="nav-footer">
                                <ul>
                                    @foreach ($location_links as $loc)
                                        <li><a href="{{ $loc->link }}">{{ $loc->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>ImmoNeuf</h3>
                            <div class="nav-footer">
                                <ul>
                                    @foreach ($immoneuf_links as $immo)
                                        <li><a href="{{ $immo->link }}">{{ $immo->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Vacances</h3>
                            <div class="nav-footer">
                                <ul>
                                    @foreach ($vacances_links as $vc)
                                        <li><a href="{{ $vc->link }}">{{ $vc->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


@endsection
@section('js')

@endsection
