@extends('layouts.app')
@section('title', 'Dev')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="{{ asset('assets/css/color-9.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy'.$ar.'.css') }}" rel="stylesheet" type="text/css">
    <style>
        .service-img{
            width: 70px;
        }
        .header_top{
            padding-top: 270px;
        }
    </style>
@endsection
@section('content')

<!--header css start-->
<section class="saas2 header" id="home">
    <div class="saas2-content ">
        <div class="bg saas2-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center header_top">
                            <p class="sub-para text-white" style="font-weight: 700; letter-spacing: 2px">#SERVICES</p>

                            <div class="header-text">
                                <h1>Ecommerce Store</h1>
                            </div>
                            <div class="header-sub-text">
                                <p class="sub-para text-white">Make more sales by giving your customers easy access to your store.</p>
                            </div>
                            <a href="#contact" class="btn btn-default new-btn">Get in touch !</a>
                            <a href="https://store.buddy.ma" class="btn btn-default primary-btn" target="_blank">See a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--header css end-->

<section>
    <div class="container-fluid text-center">
        <img alt="" src="{{ asset('assets/images/store-screen.png') }}">
        {{-- <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ncubuiuo.json" style="width: 1000px; height: 1000px; text-align:center" background="transparent" speed="1" loop autoplay></lottie-player> --}}

        {{-- <h3>  </h3> --}}
        {{-- <h5 class="text-white">{{ __('home.numbers_1') }}</h5> --}}
    </div>
</section>


<!--Over the last 3years-->
<section class="saas2 bg-gradient quick-sol">
    <div class="container set-center-div">
        <div class="row">
            <div class="col-lg-6">
                <div class="offers-container">
                    <h1 class="over_title" style="font-size: 46px; line-height: 50px">Why you should have an Ecom Store !</h1>
                    <p class="over_text">
                        By creating an e-commerce site or an online sales site, entrepreneurs and merchants can boost their business and live their passion. It is precisely a marketing strategy that is very easy to carry out, fast and inexpensive. In addition, it is a means with which the company can satisfy the expectations of consumers.
                        The reasons to sell online!
                        <br>– A booming sector
                        <br>– A true extension of a physical store
                        <br>– A borderless market
                        <br>– A shop always open
                        <br>– A personalized online shopping experience
                        <br>– Reduced investment costs
                        <br>– No need for many employees    
                    </p>
                </div>
            </div>
            <div class="center-text side-img">
                {{-- <img alt="" class="img-fluid" data-tilt data-tilt-max="3" data-tilt-perspective="500"
                     data-tilt-speed="400" src="../../assets/images/saas2/langs.png"> --}}
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_5tkzkblw.json" style="width: 700px; height: 700px;" background="transparent" speed="1" loop autoplay></lottie-player>

            </div>
        </div>
    </div>
</section>


<!-- how it works section -->
<section class="saas1 howitwork" id="how-work">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <div class="main-title">
                        <h2> {{ __('dev.work_title') }} </h2>
                    </div>
                    <hr>
                    <div class="sub-title">
                        <p class="p-padding">{{ __('dev.work_text') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 work-tab">
                <ul class="nav nav-pills justify-content-center " id="pills-tab" role="tablist">
                    <li class="nav-item  text-center">
                        <a aria-controls="pills-work1" aria-selected="true" class="nav-link active" data-bs-toggle="pill" href="#pills-work1"
                           id="pills-work1-tab" role="tab">
                            <img alt="tab-image-1" src="../../assets/images/saas1/tab-icon/01.png">
                            <h6>{{ __('dev.work1') }}</h6>
                            <span></span>
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a aria-controls="pills-work2" aria-selected="false" class="nav-link" data-bs-toggle="pill" href="#pills-work2"
                           id="pills-work2-tab" role="tab">
                            <img alt="tab-image-2" src="../../assets/images/saas1/tab-icon/001-tap.png">
                            <h6>{{ __('dev.work2') }}</h6>
                            <span></span>
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a aria-controls="pills-work3" aria-selected="false" class="nav-link" data-bs-toggle="pill"
                           href="#pills-work3" id="pills-work3-tab" role="tab">
                            <img alt="tab-image-3" src="../../assets/images/saas1/tab-icon/button.png">
                            <h6>{{ __('dev.work3') }}</h6>
                            <span></span>
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a aria-controls="pills-contact-1" aria-selected="false" class="nav-link" data-bs-toggle="pill"
                           href="#pills-contact-1" id="pills-contact1" role="tab">
                            <img alt="tab-image-4" src="../../assets/images/saas1/tab-icon/002-settings.png">
                            <h6>{{ __('dev.work4') }}</h6>
                            <span></span>
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a aria-controls="pills-contact-2" aria-selected="false" class="nav-link" data-bs-toggle="pill"
                           href="#pills-contact-2" id="pills-contact2" role="tab">
                            <img alt="tab-image-5" src="../../assets/images/saas1/tab-icon/key-1.png">
                            <h6>{{ __('dev.work5') }}</h6>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="work-tab-bg work-content p-t-50">
        <div class="tab-content text-center" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-work1" role="tabpanel">
                <img alt="tab-image-1" class="img-fluid" src="../../assets/images/saas1/tab/01.png">
            </div>
            <div class="tab-pane fade" id="pills-work2" role="tabpanel">
                <img alt="tab-image-2" class="img-fluid" src="../../assets/images/saas1/tab/02.png">
            </div>
            <div class="tab-pane fade" id="pills-work3" role="tabpanel">
                <img alt="tab-image-3" class="img-fluid" src="../../assets/images/saas1/tab/03.png">
            </div>
            <div class="tab-pane fade" id="pills-contact-1" role="tabpanel">
                <img alt="tab-image-4" class="img-fluid" src="../../assets/images/saas1/tab/04.png">
            </div>
            <div class="tab-pane fade" id="pills-contact-2" role="tabpanel">
                <img alt="tab-image-5" class="img-fluid" src="../../assets/images/saas1/tab/05.png">
            </div>
        </div>
    </div>

</section>
<!-- end work section -->

<section class="contact set-relative p-b-0 app1 about bg-theme" id="contact">
    @livewire('contact-livewire')
</section>


<section class="saas2 feature booking" id="feaure">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="title">
                    <div class="main-title">
                        <h2>What we offer</h2>
                    </div>
                    {{-- <div class="sub-title">
                        <p class="sub-title-para">{{ __('dev.feature_text') }}</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-8 col-md-7">
                <div class="center-text justify-content-center">
                    <div class="image-container">
                        {{-- https://assets3.lottiefiles.com/packages/lf20_lujntodt.json --}}
                       <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_ng6ygsm6.json" background="transparent" speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5">
                <div>
                    <div class="center-content justify-content-start">
                        {{-- <img alt="" class="img-fluid" src="../../assets/images/saas2/advance-feature/4.png"> --}}
                        <div class="feature-content">
                            <h5 class="feature-head">Integrated management system</h5>
                            <p class="feature-para">
                                A professional management system to manage: products, categories, customers, orders, messages, managers, payment methods, delivery of products to customers and more attraction that you will learn later.    
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="center-content justify-content-start">
                        {{-- <img alt="" class="img-fluid" src="../../assets/images/saas2/advance-feature/3.png"> --}}
                        <div class="feature-content">
                            <h5 class="feature-head">Domain + Host</h5>
                            <p class="feature-para">
                                We help you provide the domain of your choosing, with the best hosting server we can provide, and we will also provide you a professional mail address.    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature css end-->

<!--testimonial css start-->
<section class="saas2 testimonial bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="title">
                    <div class="main-title">
                        <h2 class="text-white">{{ __('dev.testim_title') }}</h2>
                    </div>
                    <div class="sub-title no-phone">
                        <p class="sub-title-para text-white">{{ __('dev.testim_sub') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="owl-carousel owl-theme testimonial" id="testimonial">
                    <div class="item p-t-30">
                        <div class="col-lg-10 offset-lg-1 col-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="testimonial-msg set-relative">
                                        <img alt="" class="img-fluid" src="../../assets/images/event/testimonial/L3-1.png">
                                        <div class="msg-box">
                                            <div class="center-content">
                                                <img alt=""
                                                     class="img-fluid set-abs"
                                                     src="../../assets/images/event/testimonial/message.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="quote-margin">
                                        <div class="quotes set-relative m-b-30">
                                            <img alt="" class="img-fluid set-abs left-quote"
                                                 src="../../assets/images/event/testimonial/i1.png">
                                            <div class="quote-text">
                                                <h6 class="text-white">Thank you for your professionalism and expertise and also for your quality work. You brought a touch of originality to our project. I am very satisfied with the result, which was the fruit of personalized support.</h6>
                                            </div>
                                            <img alt="" class="img-fluid set-abs right-quote"
                                                 src="../../assets/images/event/testimonial/i2.png">
                                        </div>
                                        <div class="rating align-items-center">
                                            <div class="stars">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="name">Ahmed mehdi - <span>  </span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item p-t-30">
                        <div class="col-lg-10 offset-lg-1 col-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class=" testimonial-msg set-relative">
                                        <img alt="" class="img-fluid" src="../../assets/images/event/testimonial/L3-2.png">
                                        <div class="msg-box">
                                            <div class="center-content">
                                                <img alt=""
                                                     class="img-fluid set-abs"
                                                     src="../../assets/images/event/testimonial/message_2.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="quote-margin">
                                        <div class="quotes set-relative m-b-20">
                                            <img alt="" class="img-fluid set-abs left-quote"
                                                 src="../../assets/images/event/testimonial/i1.png">
                                            <div class="quote-text">
                                                <h6 class="text-white">When you innovate, you make mistakes.It is best
                                                    to admit them quickly, & get on with improving your other
                                                    innovations.</h6>
                                            </div>
                                            <img alt="" class="img-fluid set-abs right-quote"
                                                 src="../../assets/images/event/testimonial/i2.png">
                                        </div>
                                        <div class="rating align-items-center">
                                            <div class="stars">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star yellow"></i>
                                                        <i aria-hidden="true" class="fa fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="name">Jhon Denal - <span> UI Designer</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial css end-->

<!--brand css start-->
<section class="saas2 brand">
    <div class="col-md-10 offset-md-1 col-12">
        <div class="container saas2-services">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title">
                        <div class="main-title">
                            <h2>trusted us</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme brand-slider" id="brand-slider">
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../../assets/images/app_landing2/brand/1.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../../assets/images/app_landing2/brand/2.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../../assets/images/app_landing2/brand/3.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../../assets/images/app_landing2/brand/4.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../../assets/images/app_landing2/brand/5.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--brand css end-->

{{-- @include('partials.footer') --}}

@endsection
@section('js')
    <script src="{{ asset('assets/js/script9.js') }}"></script>
@endsection
