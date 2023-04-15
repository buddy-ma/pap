<!-- START SECTION PROPERTIES FOR SALE -->
<section class="featured portfolio bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2>PAP,<span>la quintessence de l'immobilier marocain. </span></h2>
            {{-- Commercialisation et marketing immobilier --}}
            {{-- Sans intermediare sans commission --}}
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers2">
                @foreach ($products as $product)
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <a href="/produit/{{ $product->id }}" class="homes-img">
                                            <div class="homes-tag button alt featured">{{ $product->category->title }}
                                            </div>
                                            @if ($product->first_image() !== null)
                                                <img src="{{ URL::asset('storage/product/images/' . $product->first_image()->image) }}"
                                                    alt="home-1" class="img-responsive">
                                            @else
                                                <img src="{{ URL::asset('admin_assets/images/products/1.jpg') }}"
                                                    alt="img" class="img-responsive">
                                            @endif

                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        @isset($product->vr_link)
                                            <a href="{{ $product->vr_link }}" class="btn"><i class="fa fa-link"></i></a>
                                        @endisset

                                        @isset($product->video_link)
                                            <a href="{{ $product->video_link }}" class="btn popup-video popup-youtube"><i
                                                    class="fas fa-video"></i></a>
                                        @endisset

                                        <a href="/produit/{{ $product->id }}" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="/produit/{{ $product->id }}">{{ $product->title }}</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="/produit/{{ $product->id }}">
                                            <i class="fa fa-map-marker"></i><span>{{ $product->ville }},
                                                {{ $product->quartier }}, {{ $product->address }}</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $product->nbr_chambres }} chambres</span>
                                        </li>

                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>{{ $product->surface }} {{ $product->unite_surface }}</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a> {{ $product->prix }} dh</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->
