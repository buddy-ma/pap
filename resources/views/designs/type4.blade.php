@php $lorem = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' @endphp
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="{{ asset('assets/css/color-9.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/color-7.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/inner-page.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy'.$ar.'.css') }}" rel="stylesheet" type="text/css">

    <style>
        .dropdown img {
            width: 16px;
            height: 16px;
            display: block;
        }

        header.nav-abs {
            position: fixed;
            top: 0;
            padding: 20px 0;
        }

        header nav ul li>a {
            color: black;
        }

        .portfolio-metro h1 {
            font-size: 80px;
            margin-bottom: 100px;
        }

        .app2.fixed ul li>a {
            color: white;
        }

        .app2.fixed ul li a ul li a {
            color: #000;
        }
    </style>
@endsection
@section('content')

<!--breadcrumb section end-->
<section class="agency breadcrumb-section p-9" style="background:#5e57ea; background-image: url('../assets/images/breadcrumb.svg') ">
    {{-- style="" --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-text text-center">{{$design->title}}</h2>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{$design->link}}">artwork details</a></li>
                    <li>{{$design->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->
<img alt="" class="img-fluid set-abs buddy move-up-down"
    src="../assets/images/buddy/artist.png">
<img alt="" class="img-fluid set-abs img1 move-up-down"
    src="../assets/images/buddy/icons/01.png">
<img alt="" class="img-fluid set-abs img2 move-right-left"
    src="../assets/images/buddy/icons/02.png">
<img alt="" class="img-fluid set-abs img3 move-right-left"
    src="../assets/images/buddy/icons/03.png">


<!-- section start -->
<section class="portfolio-section port-col zoom-gallery detail-page fullwidth-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="portfolio-detail">
                    <h3 class="detail-head">project detail</h3>
                    <div class="detail-container d-flex p-t-0">
                        <div class="portfolio-left">
                            <h5 class="text-start">client :</h5>
                        </div>
                        <div class="portfolio-right">
                            <h5>{{$design->client}}</h5>
                        </div>
                    </div>
                    <div class="detail-container d-flex">
                        <div class="portfolio-left">
                            <h5 class="text-start">date :</h5>
                        </div>
                        <div class="portfolio-right">
                            <h5>{{$design->date}}</h5>
                        </div>
                    </div>
                    <div class="detail-container d-flex">
                        <div class="portfolio-left">
                            <h5 class="text-start">link :</h5>
                        </div>
                        <div class="portfolio-right">

                            <h5>{{$design->link}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="portfolio-detail">
                    <h3 class="detail-head" style="display: inline">about project</h3>
                    <a class="btn btn-default primary-btn radius-0" style="float: right" href="{{$design->link}}">visit project</a>
                    <p style="margin-top: 20px">{{ $design->description ?? $lorem }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section start -->
<section class="portfolio-creative portfolio-section  creative2 creative3 p-0">
    <div class="container-fluid">
        <div class="row">
            @forelse ($design->sections as $section)
                @if($loop->even)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12 p-0 isotopeSelector">
                                <img alt="" class="img-fluid" src="{{URL::asset('storage/design/sections/'.$section->image)}}">
                            </div>
                            <div class="col-12 p-0">
                                <div class="portfolio-text d-flex">
                                    <div class="w-50">
                                        <h2 class="head-text">
                                            {{$section->title}}
                                        </h2>
                                        <h5 class="head-sub-text">
                                            {{$section->description}}
                                        </h5>
                                    </div>
                                    <div class="text-end w-50">
                                        <a class="btn btn-default primary-btn bor" href="#">{{$section->button}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="portfolio-text d-flex">
                                    <div class="w-50">
                                        <h2 class="head-text">
                                            {{$section->title}}
                                        </h2>
                                        <h5 class="head-sub-text">
                                            {{$section->description}}
                                        </h5>
                                    </div>
                                    <div class="text-end w-50">
                                        <a class="btn btn-default primary-btn bor" href="#">{{$section->button}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-0 isotopeSelector">
                                <img alt="" class="img-fluid" src="{{URL::asset('storage/design/sections/'.$section->image)}}">
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <p> Empty Results </p>
            @endforelse
        </div>
    </div>
</section>
<!-- section end -->

@endsection
