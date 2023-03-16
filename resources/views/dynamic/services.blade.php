<!--services start-->
<section class="resume services bg-pink" id="services">
    <div class="container">
        <div class="row">
            <div class=" offset-md-2 col-md-8">
                <div class="title title2">
                    <h6 class="font-primary borders main-text text-uppercase"><span>details</span></h6>
                    <div class="sub-title">
                        <div>
                            <h2 class="title-text">services & experience</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4">
                    <div class="service bg-white">
                        <div class="img-block">
                            @if ($service->is_lord == 1)
                                {!! $service->lord_icon !!}
                            @else
                                <img src="{{ asset("storage/portfolio/$service->icon") }}" class="avatar avatar-xxl brround"
                                    alt="icon">
                            @endif
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text text-center">{{$service->title}}</h4>
                            <p>{{$service->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>