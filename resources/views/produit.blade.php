@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', 'blue')
@section('bodyClasses', 'inner-pages hd-white')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">
@endsection
@section('content')
    {{-- <section class="headings">
        <div class="text-heading text-center">
        </div>
    </section> --}}

    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="headings-2 pt-1 pb-2 mt-5">
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
                        <p>
                            <i class="fa fa-map-pin mr-3"></i>{{ $product->ville }}, {{ $product->quartier }},
                            {{ $product->address }}
                        </p>
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
    <script>
        if ($('#map-contact').length) {
            var map = L.map('map-contact', {
                zoom: 15,
                maxZoom: 20,
                tap: false,
                gestureHandling: true,
                center: [{{ $product->longitude }}, {{ $product->latitude }}]
            });

            map.scrollWheelZoom.disable();

            var Hydda_Full = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
                scrollWheelZoom: false,
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var icon = L.divIcon({
                html: '<i class="fa fa-building"></i>',
                iconSize: [50, 50],
                iconAnchor: [50, 50],
                popupAnchor: [-20, -42]
            });

            var marker = L.marker([{{ $product->longitude }}, {{ $product->latitude }}], {
                icon: icon
            }).addTo(map);
        }
    </script>
@endsection
