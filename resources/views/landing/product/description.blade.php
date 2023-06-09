<div class="row">
    <div class="col-md-8 col-12">
        <section class="headings-2 pt-1 pb-2 mt-4">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <h4>{{ $product->title }}</h4>
                    </div>
                </div>
            </div>
        </section>
        <div class="blog-info details mb-30">
            <h5 class="mb-4">Description</h5>
            <p class="mb-3">{{ $product->description }}</p>
            @isset($product->proprietaire->pdf)
                <a class="btn btn-primary mt-3 border-0 font-weight-bold px-4"
                    href="{{ URL::asset('storage/product/pdf/' . $product->proprietaire->pdf) }}"
                    style="height: 60px; line-height: 50px">
                    <i class="fas fa-download mr-2"></i>Telecharger la brochure PDF
                </a>
            @endisset
        </div>
        <div class="single homes-content details mb-30 mt-4">
            <h5 class="mb-4">Details</h5>
            <ul class="homes-list clearfix">
                <li>
                    <b>Category : </b>
                    <span>{{ $product->category->title }}</span>
                </li>
                <li>
                    <b>Type : </b>
                    <span>{{ $product->type->title }}</span>
                </li>
                <li>
                    <b>Reference : </b>
                    <span>{{ $product->reference }}</span>
                </li>
                <li>
                    <b>Prix : </b>
                    @if ($product->prix_by == 'a partir de')
                        <span>{{ $product->prix_by }} {{ $product->prix }} dh</span>
                    @elseif ($product->prix_by != 'fix')
                        <span>{{ $product->prix }} / {{ $product->prix_by }} dh</span>
                    @else
                        <span>{{ $product->prix }} dh</span>
                    @endif
                </li>
            </ul>
            <ul class="homes-list clearfix">
                <li>
                    <b>Ville : </b>
                    <span>{{ $product->ville }}</span>
                </li>
                <li>
                    <b>Quartier : </b>
                    <span>{{ $product->quartier }}</span>
                </li>
                <li>
                    <b>Addresse : </b>
                    <span>{{ $product->address }}</span>
                </li>
                <li>
                    <b>Surface : </b>
                    <span>{{ $product->surface }} {{ $product->unite_surface }}</span>
                </li>
                <li>
                    <b>Nbr Chambres : </b>
                    <span>{{ $product->nbr_chambres }}</span>
                </li>
                <li>
                    <b>Nbr Salons : </b>
                    <span>{{ $product->nbr_salons }}</span>
                </li>
            </ul>
            <ul class="homes-list clearfix">
                <hr class="default">
                @foreach (json_decode($product->extras) as $key => $value)
                    <li class="w-100">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        <span>{{ $value }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <aside class="col-lg-4 col-md-12 col-12 car">
        <div class="single widget">
            <div class="sidebar">
                <div class="widget-boxed mt-3">
                    <div class="widget-boxed-body">
                        <div class="sidebar-widget author-widget2">
                            <div class="agent-contact-form-sidebar">
                                @if ($product->proprietaire->hide_infos == 0)
                                    <h4>Information du @if ($product->product_category_id == 3)
                                            promoteur
                                        @else
                                            proprietaire
                                        @endif
                                    </h4>
                                    <ul class="author__contact" id="app">
                                        @isset($product->proprietaire->logo)
                                            <li>
                                                <img src="{{ asset('storage/product/logo/' . $product->proprietaire->logo) }}"
                                                    alt="{{ $product->proprietaire->firstname }}
                                                    {{ $product->proprietaire->lastname }}"
                                                    class="mb-3 w-50 ml-auto mr-auto d-block">
                                            </li>
                                        @endisset
                                        <li>
                                            <span class="la la-user">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>{{ $product->proprietaire->firstname }}
                                            {{ $product->proprietaire->lastname }}
                                        </li>
                                        <li v-if="show">
                                            <span class="la la-phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>{{ $product->proprietaire->phone }}
                                        </li>
                                        <li v-else>
                                            <span class="la la-phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>{{ substr($product->proprietaire->phone, 0, 3) }}****
                                        </li>

                                        <button v-if="!show" @click="voir({{ $product->id }})" type="button"
                                            class="btn btn-block btn-primary mt-3">
                                            Voir telephone
                                        </button>
                                    </ul>
                                @else
                                    <h4>Information du
                                        @if ($product->product_category_id == 3)
                                            promoteur
                                        @else
                                            proprietaire
                                        @endif
                                    </h4>
                                    <p>NB : Le propriétaire refuse le démarchage commercial.</p>
                                @endif
                                <hr>
                                <h4>Contact</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ route('produitContact', $product->id) }}">
                                    @csrf
                                    <input type="text" name="fullname" placeholder="Nom complet" required />
                                    <input type="text" maxlength="10" name="phone" placeholder="Telephone"
                                        required />
                                    <input type="email" name="email" placeholder="Email Address" />
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <button type="submit" class="btn btn-block btn-primary mt-3"> Envoyer </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
@section('js')
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    id: 0,
                    show: false,
                };
            },
            methods: {
                voir(id) {
                    axios.get('/vues_phone', {
                            params: {
                                id: id,
                            }
                        })
                        .then(response => {
                            //show phone
                            this.show = true
                        })
                        .catch(error => {});
                },
            }
        }).mount('#app')
    </script>
@endsection
