<!-- START SECTION PROPERTIES FOR SALE -->
<section class="featured portfolio bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            {{-- <h2><span>Catalogue des </span>produits.</h2> --}}
            <h2>PAP,<span> la quintessence de l'immobilier marocain. </span></h2>
        </div>
        <div class="portfolio row">
            @foreach ($products as $product)
                <div class="agents-grid col-xl-3 col-md-4 col-12 mb-3">
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <a href="/produit/{{ $product->slug }}" class="homes-img">
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
                                    @if (!empty($product->vr_link))
                                        <a href="{{ $product->vr_link }}" class="btn"><i class="fa fa-link"></i></a>
                                    @endif

                                    @if (!empty($product->video_link))
                                        <a href="{{ $product->video_link }}" class="btn popup-video popup-youtube"><i
                                                class="fas fa-video"></i></a>
                                    @endif

                                    <a href="/produit/{{ $product->slug }}" class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="/produit/{{ $product->slug }}">{{ $product->title }}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="/produit/{{ $product->slug }}">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
