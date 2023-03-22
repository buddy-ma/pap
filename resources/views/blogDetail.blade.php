@extends('layouts.app')
@section('title', 'Blog')
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

    <section class="headings">
        <div class="text-heading text-center">
        </div>
    </section>

    <section class="blog blog-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="news-item details no-mb2">
                        <div class="news-item-text details pb-0">
                            <h2>{{ $blog->title }}</h2>
                            <div class="dates">
                                <span class="date">{{ $blog->updated_at->translatedFormat('F j, Y') }}</span>
                            </div>
                            <div class="news-item-descr big-news details visib mb-0">
                                <p>
                                    {!! $blog->text !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.blogDetails.articleSimilaires')

@endsection
@section('js')

@endsection
