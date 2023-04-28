<div class="row">
    <div class="col-md-8 col-12">
        <div class="blog-info details mb-30">
            <h5 class="mb-4">Description</h5>
            <p class="mb-3">{{ $product->description }}</p>
        </div>
    </div>
    <aside class="col-lg-4 col-md-12 col-12 car">
        <div class="single widget">
            <div class="sidebar">
                <div class="widget-boxed mt-33">
                    <div class="widget-boxed-body">
                        <div class="sidebar-widget author-widget2">
                            <div class="agent-contact-form-sidebar">
                                @if ($product->proprietaire->hide_infos == 0)
                                    <h4>Information du proprietaire</h4>
                                    <ul class="author__contact">
                                        <li>
                                            <span class="la la-user">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>{{ $product->proprietaire->firstname }}
                                            {{ $product->proprietaire->lastname }}
                                        </li>
                                        <li>
                                            <span class="la la-phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span>{{ $product->proprietaire->phone }}
                                        </li>
                                    </ul>
                                @else
                                    <h4>Information du proprietaire</h4>
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
