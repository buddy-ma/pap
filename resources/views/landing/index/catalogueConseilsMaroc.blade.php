<section class="blog-section bg-white-2 w-100">
    <div class="container">
        <div class="sec-title">
            <h2><span> Catalogue des </span>articles sur le Maroc.</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                @foreach ($villes as $ville)
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="200">
                            <a href="/ville/{{ $ville->id }}" class="news-img-link">
                                <div class="news-item-img">
                                    @isset($ville->image)
                                        <img class="img-responsive" src="{{ asset('images/villes/' . $ville->image) }}"
                                            alt="blog image">
                                    @else
                                        <img class="img-responsive" src="{{ asset('assets/images/blog/b-10.jpg') }}"
                                            alt="blog image">
                                    @endisset
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="/ville/{{ $ville->id }}">
                                    <h3>{{ $ville->title }}</h3>
                                </a>

                                <div class="news-item-descr big-news">
                                    @php
                                        $txt = strip_tags($ville->text);
                                        $txt = html_entity_decode($txt);
                                    @endphp
                                    <p>{{ substr($txt, 0, 170) }}... </p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="/blog/{{ $ville->id }}" class="news-link">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
