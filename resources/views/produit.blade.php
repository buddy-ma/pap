@extends('layouts.app')
@section('title', 'Particulier a particulier')
@section('logo', $color)
@section('bodyClasses', 'inner-pages hd-white')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/colors/' . $color . '.css') }}">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }
    </style>
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

                    @include('landing.product.carousel')

                    @include('landing.product.description')

                    @if ($product->product_category_id == 3)
                        <div class="single homes-content details mb-30">
                            <h5 class="mb-4">Biens Disponibles</h5>
                            <table id="customers">
                                <tr>
                                    <th>Appartements</th>
                                    <th>A partir de</th>
                                    <th>Surface</th>
                                    <th></th>
                                </tr>
                                @foreach ($product->biens as $k => $v)
                                    <tr>
                                        <td>{{ $v->title }}</td>
                                        <td>{{ $v->price }} dh</td>
                                        <td>{{ $v->surface }} m²</td>
                                        <td><button class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal{{ $k }}">Plan</button></td>
                                    </tr>
                                    <div class="modal fade" id="modal{{ $k }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modalTitle{{ $k }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle{{ $k }}">Obtenir le
                                                        plan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post"
                                                        action="{{ route('produitContact', $product->id) }}">
                                                        @csrf
                                                        <label for="fullname">Nom complet</label>
                                                        <input type="text" name="fullname" placeholder="Nom complet"
                                                            class="form-control mb-3" required />
                                                        <label for="phone">Telephone</label>
                                                        <input type="text" maxlength="10" name="phone"
                                                            class="form-control mb-3" placeholder="Telephone" required />
                                                        <label for="email">Email Address</label>
                                                        <input type="email" name="email" placeholder="Email Address"
                                                            class="form-control mb-3" />
                                                        <label for="message">Message</label>
                                                        <textarea placeholder="Message" name="message" required class="form-control mb-2">Bonjour, je souhaite recevoir le plan de {{ $v->title }} de {{ $v->surface }}m²  à {{ $v->price }} dh. Cordialement.
                                                    </textarea>
                                                        <button type="submit" class="btn btn-block btn-primary mt-3">
                                                            Envoyer
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    J'autorise pap.ma à collecter, traiter et transmettre ces données au
                                                    promoteur immobilier qui vous contactera par email ou par téléphone afin
                                                    de
                                                    gérer votre demande.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    @endif

                    <div class="property-location map">
                        <h5>Localisation</h5>
                        <div class="divider-fade"></div>
                        <p>
                            <i class="fa fa-map-pin mr-3"></i>{{ $product->ville }}, {{ $product->quartier }},
                            {{ $product->address }}
                        </p>
                        <iframe src="{{ $product->position }}" width="100%" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
