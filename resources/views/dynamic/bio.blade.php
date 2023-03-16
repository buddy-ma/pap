<section class="resume">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="center-content center-mobile">
                    <img class="bio_img" src="{{ URL::asset("/storage/user/$user->avatar") }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3 class="mb-3">Welcome</h3>
                <p class="bio_text"> {{ $user->bio }} </p>
            </div>
        </div>
    </div>
</section>
