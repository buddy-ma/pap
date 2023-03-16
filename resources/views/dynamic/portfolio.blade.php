<section class="portfolio-section portfolio-metro zoom-gallery" id="portfolio">
    <div class="filter-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="filter-container isotopeFilters">
                        <ul class="list-inline filter">
                            <li class="active"><a data-filter="*" href="#"> All </a></li>
                            @foreach ($cats as $cat)
                                <li><a data-filter=".{{ $cat->category }}"> {{ $cat->category }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @php
                $cats = ['digital', 'portrait'];
            @endphp
            <div class="isotopeContainer row">
                @foreach ($designs as $design)
                    @if ($loop->index == 4 || $loop->index == 5)
                        <div class="col-lg-4 col-md-4 col-6 isotopeSelector {{ $design->Category->category }}">
                        @else
                            <div class="col-lg-2 col-md-4 col-6 isotopeSelector {{ $design->Category->category }}">
                    @endif
                    <div class="overlay">
                        <div class="border-portfolio">
                            <a class="zoom_gallery" title="{{ $design->title }}"
                                href="{{ asset('storage/design/' . $design->image) }}">
                                <div class="overlay-background">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </div>
                                <img class="img-fluid" alt="{{ $design->title }}" title="{{ $design->title }}"
                                    src="{{ asset('storage/design/' . $design->image) }}">
                            </a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
