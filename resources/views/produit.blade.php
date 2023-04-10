@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'blue')
@section('bodyClasses', 'inner-pages sin-1 homepage-4 hd-white')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">
@endsection
@section('content')
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="headings-2 pt-2">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <h3>{{ $product->title }}</h3>
                                </div>
                            </div>
                        </div>
                    </section>

                    @include('landing.product.carousel')

                    @include('landing.product.description')


                    <div class="single homes-content details mb-30">
                        <h5 class="mb-4">Details</h5>
                        <ul class="homes-list clearfix">
                            @foreach (json_decode($product->extras) as $key => $value)
                                <li class="w-100">
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{ $value }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="property-location map">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <div id="map-contact" class="contact-map"></div>
                    </div>

                    @include('landing.product.similarProduits')

                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>

    <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });
    </script>
@endsection
