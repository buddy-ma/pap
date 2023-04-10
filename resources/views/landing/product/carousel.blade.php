<div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
    <div class="carousel-inner">
        @foreach ($product->images as $image)
            <div class="@if ($loop->first) active @endif item carousel-item"
                data-slide-number="{{ $loop->index }}">
                <img src="{{ URL::asset('storage/product/images/' . $image->image) }}" class="img-fluid"
                    alt="slider-listing">
            </div>
        @endforeach

        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                class="fa fa-angle-left"></i></a>
        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                class="fa fa-angle-right"></i></a>

    </div>
    <!-- main slider carousel nav controls -->
    <ul class="carousel-indicators smail-listing list-inline">
        @foreach ($product->images as $image)
            <li class="list-inline-item @if ($loop->first) active @endif">
                <a id="carousel-selector-{{ $loop->index }}" class="selected" data-slide-to="{{ $loop->index }}"
                    data-target="#listingDetailsSlider">
                    <img src="{{ URL::asset('storage/product/images/' . $image->image) }}" class="img-fluid"
                        alt="listing-small">
                </a>
            </li>
        @endforeach
    </ul>
</div>
