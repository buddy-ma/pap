<!--counter start-->
<section class="resume counter">
    <div class="container">
        <div class="row">
            @foreach ($numbers as $number)
                <div class="col-xl-3 col-6 counter-container">
                    <div class="counters">
                        <img alt="" class="img-fluid counter-img" src="{{ asset("storage/icons/$number->icon") }}" style="max-width:60px">
                        <div class="counter-text">
                            <h3 class="count-text counts">{{$number->number}}</h3>
                            <h5 class="count-desc">{{$number->title}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--counter end-->
