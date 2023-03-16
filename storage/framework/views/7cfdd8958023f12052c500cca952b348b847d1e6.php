
<?php $__env->startSection('title', 'Welcome'); ?>
<?php $__env->startSection('css'); ?>
    <?php $ar = App::getLocale() == 'ar' ? '_ar' : ''; ?>
    <link href="<?php echo e(asset('assets/css/color-2.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/buddy'.$ar.'.css')); ?>" rel="stylesheet" type="text/css">
    <style>
        .mobile-screen{
            --animate-delay: 7s;
            /* animation-duration: 7s; */
        }
        .animate__slideInUp{
            --animate-duration: 12s;
        }


    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--header start-->
    <section class="app2 header overflow-unset" id="home">
        <div class="app2-header bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="center-text">
                            <div>
                                <h6 class="header-top-line"><?php echo e(__('home.header_top_line')); ?></h6>
                                <div class="header-text">
                                    <h1><?php echo __('home.header_title'); ?></h1>
                                </div>
                                <div class="header-sub-text">
                                    <p class="text-white"><?php echo e(__('home.header_text')); ?></p>
                                </div>
                                <div class="link-horizontal mobile-none">
                                    <ul>
                                        <li><a class="btn btn-default btn-white" href="#about"><?php echo e(__('home.header_btn')); ?></a></li>
                                        <!--li><a class="btn btn-default primary-btn transparent">discover more</a></li-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="img-mobile set-abs">
                            <img alt="buddy" class="animate__animated animate__backInDown animate__delay-1s headaer-image" src="../assets/images/buddy/1.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave"></div>
        </div>
    </section>
    <!--header end-->

    <!--about start-->
    <section class="app2 about format pad-200" id="about">

        <!--div class="animated-bg"><i></i><i></i><i></i></div-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5 counters set-height">
                    <img alt="buddy" class="animate__animated animate__fadeInLeft animate__delay-3s img-fluid mobile1" src="../assets/images/buddy/2.png">
                    <!--img alt="" class="img-fluid j-img" src="../assets/images/app_landing2/j.png"-->
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6 counters">
                    <div class="abouts center-text pad-50">
                        <div>
                            <div>
                                <h6 class="font-primary borders-before text-uppercase"><span><?php echo e(__('home.about_top_line')); ?></span></h6>
                            </div>
                            <div class="format-head-text">
                                <h3 class="about-font-header font-secondary"><?php echo e(__('home.about_title')); ?></h3>
                            </div>
                            <div class="format-sub-text">
                                <p class="about-para"><?php echo e(__('home.about_text')); ?></p>
                            </div>
                            <ul class="icon-collection">
                                <li class="about-icon">
                                    <a class="center-content" href="<?php echo e(url('/art')); ?>"><img
                                            alt="" class="img-fluid" src="../assets/images/app_landing2/about-icons/4.png"></a>
                                </li>
                                <li class="about-icon">
                                    <a class="center-content" href="<?php echo e(url('/dev')); ?>"><img
                                            alt="" class="img-fluid" src="../assets/images/app_landing2/about-icons/5.png"></a>
                                </li>
                                <li class="about-icon">
                                    <a class="center-content" href="<?php echo e(url('/store')); ?>"><img
                                            alt="" class="img-fluid" src="../assets/images/app_landing2/about-icons/6.png"></a>
                                </li>
                            </ul>
                            <a class="btn btn-default btn-gradient mar-50" href="https://www.behance.net/gallery/123754971/Buddy-Personal-branding" target="_blank"><?php echo e(__('home.about_btn')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about end-->

    <!--services start-->
    <section class="app2 services p-t-0" id="services">
        <div class="animated-bg"><i></i><i></i><i></i></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title2">
                        <img alt="" class="animate__animated animate__rubberBand animate__infinite animate__slow img-fluid title-img" src="../assets/images/logo/2.png">
                        <h6 class="font-primary borders main-text text-uppercase"><span><?php echo e(__('home.service_top_line')); ?></span></h6>
                        <div class="sub-title">
                            <h2 class="title-text text-capitalize text-center"><?php echo e(__('home.service_title')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-container">
                    <div class="service">
                        <div class="img-block">
                            <lord-icon
                                src="https://cdn.lordicon.com/qhgmphtg.json"
                                trigger="loop"
                                colors="primary:#110a5c,secondary:#3080e8"
                                style="width:70px;height:70px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text"><?php echo e(__('home.service1_title')); ?></h4>
                            <p><?php echo e(__('home.service1_text')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-container">
                    <div class="service">
                        <div class="img-block">
                            <lord-icon
                                src="https://cdn.lordicon.com/jqeuwnmb.json"
                                trigger="loop"
                                colors="primary:#110a5c,secondary:#3080e8"
                                style="width:70px;height:70px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text"><?php echo e(__('home.service2_title')); ?></h4>
                            <p><?php echo e(__('home.service2_text')); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 service-container">
                    <div class="service">
                        <div class="img-block">
                            <lord-icon
                                src="https://cdn.lordicon.com/gqzfzudq.json"
                                trigger="loop"
                                colors="primary:#110a5c,secondary:#3080e8"
                                style="width:70px;height:70px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text"><?php echo e(__('home.service3_title')); ?></h4>
                            <p><?php echo e(__('home.service3_text')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-container">
                    <div class="service">
                        <div class="img-block">
                            <lord-icon
                                src="https://cdn.lordicon.com/wloilxuq.json"
                                trigger="loop"
                                colors="primary:#110a5c,secondary:#3080e8"
                                style="width:70px;height:70px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text"><?php echo e(__('home.service4_title')); ?></h4>
                            <p><?php echo e(__('home.service4_text')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-container">
                    <div class="service">
                        <div class="img-block">
                            <lord-icon
                                src="https://cdn.lordicon.com/rqqkvjqf.json"
                                trigger="loop"
                                colors="primary:#110a5c,secondary:#3080e8"
                                style="width:70px;height:70px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text"><?php echo e(__('home.service5_title')); ?></h4>
                            <p><?php echo e(__('home.service5_text')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-container">
                    <div class="service">
                        <div class="img-block">
                            <lord-icon
                                src="https://cdn.lordicon.com/tvyxmjyo.json"
                                trigger="loop"
                                colors="primary:#110a5c,secondary:#3080e8"
                                style="width:70px;height:70px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text"><?php echo e(__('home.service6_title')); ?></h4>
                            <p><?php echo e(__('home.service6_text')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services end-->

    <section class="app1 about bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-sm-12">
                    <div class="row set-padding">
                        <div class="col-sm-6 counters">
                            <div class="abouts">
                                <div>
                                    <img alt="" class="service-img img-fluid"
                                         src="../assets/images/app_landing1/about/affection.png">
                                    <h3 class="text-white">124+</h3>
                                    <h5 class="text-white"><?php echo e(__('home.numbers_1')); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 counters">
                            <div class="abouts">
                                <div>
                                    <img alt="" class="service-img img-fluid"
                                         src="../assets/images/app_landing1/about/launch.png">
                                    <h3 class="text-white">17+</h3>
                                    <h5 class="text-white"><?php echo e(__('home.numbers_2')); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 counters">
                            <div class="abouts">
                                <div>
                                    <img alt="" class="service-img img-fluid"
                                         src="../assets/images/app_landing1/about/social.png">
                                    <h3 class="text-white">5401+</h3>
                                    <h5 class="text-white"><?php echo e(__('home.numbers_4')); ?></h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 counters">
                            <div class="abouts">
                                <div>
                                    <img alt="" class="service-img img-fluid"
                                         src="../assets/images/app_landing1/about/coffee.png">
                                    <h3 class="text-white">385</h3>
                                    <h5 class="text-white"><?php echo e(__('home.numbers_3')); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="set-abs mobile mobile-img bottom-0">
            <div class="set-relative">
                <img alt="" class="img-fluid mobile-screen animate__animated animate__pulse animate__infinite animate__slow" src="../assets/images/app_landing1/about/1-1.png">
                <div class="set-abs mobile rectangle r-2  center-content bottom-0">
                    <img alt="" class="img-fluid" src="../assets/images/app_landing1/icons/1-2.png">
                </div>
                <div class="set-abs mobile rectangle center-content bottom-0">
                    <img alt="" class="img-fluid" src="../assets/images/app_landing1/Ellipse-2-copy-241.png">
                </div>
                <div class="set-abs mobile center-content galaxy bottom-0">
                    <img alt="" class="img-fluid" src="../assets/images/app_landing1/about/Layer-27.png">
                </div>
            </div>
        </div>
    </section>

    <!--function start
    <section class="app2 format quality p-t-0">
        <div class="animated-bg"><i></i><i></i><i></i></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 counters set-order-2">
                    <div class="abouts center-text">
                        <div>
                            <div class="format-head-text">
                                <h3 class="about-font-header font-secondary">High Quality Functions</h3>
                            </div>
                            <div class="format-sub-text">
                                <p class="about-para">You can now use all Social Network from this Lunatic app also. Writers
                                    and stars of Veep
                                    have responded incredulous to the news an Australian politician required stitches after
                                    knocking himself unconscious while laughing.</p>
                            </div>
                            <ul class="icon-collection">
                                <li class="about-icon">
                                    <a class="center-content" href="#">
                                        <h4 class="quality">2 M</h4>
                                        <h6 class="users ">user</h6>
                                    </a>
                                </li>
                                <li class="about-icon">
                                    <a class="center-content" href="#">
                                        <h4 class="quality">2.5 M</h4>
                                        <h6 class="users">download</h6>
                                    </a>
                                </li>
                            </ul>
                            <a class="btn btn-default btn-gradient m-t-45">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6  counters set-height overflow-hide">
                    <img alt="" class="img-fluid mobile2" data-aos="fade-left" data-aos-duration="1500"
                        src="../assets/images/app_landing2/l-2.png">
                </div>
            </div>
        </div>
    </section>
    <!--function end-->

    <section class="agency format speaker expert-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title title2 title-inner">
                        <div class="main-title">
                            <h2 class="font-primary borders text-center text-uppercase m-b-0"><span><?php echo e(__('home.comm_title1')); ?></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="format-container">
                        <h6 class="borders-before text-uppercase font-600">
                            <span><?php echo e(__('home.comm_subtitle')); ?></span>
                        </h6>
                        <div class="format-head-text">
                            <h2><?php echo __('home.comm_title2'); ?>

                            </h2>
                        </div>
                        <div class="format-sub-text">
                            <p class="about-para"><?php echo e(__('home.comm_text')); ?></p>
                        </div>
                        <a class=" btn btn-default btn-gradient text-white" href="#"><?php echo e(__('home.comm_btn')); ?></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="owl-carousel owl-theme speaker-slider">
                        <div class="item speker-container">
                            <div class="text-center">
                                <a href="https://portfolio.thebuddy.world" target="_blank">
                                    <div class="team-img">
                                        <img alt="" class="img-fluid" src="../assets/images/event/l1-2.png">
                                        <div class="overlay"></div>
                                        <div class="social">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/people/Ayman-Bouybri/100017652583908/" target="_blank">
                                                        <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/ayman____buuu/" target="_blank">
                                                        <i aria-hidden="true" class="fa fa-instagram center-content"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.behance.net/buddysigner" target="_blank">
                                                        <i aria-hidden="true" class="fa fa-behance center-content"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/ayman-bouybri-b233b8156/?originalSubdomain=ma" target="_blank">
                                                        <i aria-hidden="true" class="fa fa-linkedin center-content"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <div class="employee">
                                    <a href="https://portfolio.thebuddy.world" target="_blank">
                                        <h5 class="e-name text-center font-secondary">Ayman Bouybri</h5>
                                    </a>
                                    <h6 class="post text-center ">Buddy's Creator</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item speker-container">
                            <div class="text-center">
                                <div class="team-img">
                                    <img alt="" class="img-fluid" src="../assets/images/event/l3-3.png">
                                    <div class="overlay"></div>
                                    <div class="social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-google center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="employee">
                                    <h5 class="e-name text-center font-secondary">Mark Tucker</h5>
                                    <h6 class="post text-center ">App Developer - Jumpster</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item speker-container">
                            <div class="text-center">
                                <div class="team-img">

                                    <img alt="" class="img-fluid" src="../assets/images/event/l3-4.png">

                                    <div class="overlay"></div>
                                    <div class="social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-google center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="employee">
                                    <h5 class="e-name text-center font-secondary">Sam Rowling</h5>
                                    <h6 class="post text-center ">Team Leader - otstrab</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item speker-container">
                            <div class="text-center">
                                <div class="team-img">

                                    <img alt="" class="img-fluid" src="../assets/images/event/l3-1.png">

                                    <div class="overlay"></div>
                                    <div class="social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-google center-content"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-globe center-content"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="employee">
                                    <h5 class="e-name text-center font-secondary">Sam Rowling</h5>
                                    <h6 class="post text-center ">Team Leader - otstrab</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--screen-shot start>
    <section class="app2 screenshot p-t-0" id="screen-shot">
        <div class="animated-bg"><i></i><i></i><i></i></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title2">
                        <img alt="" class="img-fluid title-img" src="../assets/images/logo/2.png">
                        <h6 class="font-primary borders main-text"><span>screen shot</span></h6>
                        <div class="sub-title">
                            <h2 class="title-text text-capitalize text-center">screen shot</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row set-relative">
                <div class="col-12">
                    <!-- Swiper >
                    <div class="owl-carousel owl-theme screenshot-slider" id="screenshot-slider">
                        <div class="item">
                            <img alt="" class="img-fluid" src="../assets/images/app_landing2/screenshot/1.png">
                        </div>
                        <div class="item">
                            <img alt="" class="img-fluid" src="../assets/images/app_landing2/screenshot/2.png">
                        </div>
                        <div class="item">
                            <img alt="" class="img-fluid" src="../assets/images/app_landing2/screenshot/1.png">
                        </div>
                        <div class="item">
                            <img alt="" class="img-fluid" src="../assets/images/app_landing2/screenshot/2.png">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--screen-shot end-->

    
    <section class="contact set-relative p-b-0 app1 about bg-theme">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact-livewire')->html();
} elseif ($_instance->childHasBeenRendered('5eNQm4r')) {
    $componentId = $_instance->getRenderedChildComponentId('5eNQm4r');
    $componentTag = $_instance->getRenderedChildComponentTagName('5eNQm4r');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5eNQm4r');
} else {
    $response = \Livewire\Livewire::mount('contact-livewire');
    $html = $response->html();
    $_instance->logRenderedChild('5eNQm4r', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </section>  

    <!-- faq section -->
    <section class="saas1 faq testimonial-bg" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="faq-block">
                        <div>
                            <h3 class="frequent-text"><?php echo e(__('home.qst_title')); ?></h3>
                            <h6><?php echo e(__('home.qst_text')); ?></h6>
                            <div class="accordion faq" id="accordionExample">
                                <div class="accordion-item">
                                    <div aria-expanded="false" class="card-header accordion-header collapsed" data-bs-target="#collapse1"
                                        data-bs-toggle="collapse"
                                        role="heading">
                                        <a>
                                            <div class="fa fa-angle-right rotate"></div>
                                        </a>
                                        <?php echo e(__('home.qst1')); ?>

                                    </div>
                                    <div class="collapse show" data-parent="#accordionExample" id="collapse1">
                                        <div class="card-body"><?php echo e(__('home.answer1')); ?></div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div aria-expanded="false" class="card-header accordion-header collapsed" data-bs-target="#collapse2"
                                        data-bs-toggle="collapse"
                                        role="heading">
                                        <a>
                                            <div class="fa fa-angle-right rotate"></div>
                                        </a>
                                        <?php echo e(__('home.qst2')); ?>

                                    </div>
                                    <div class="collapse" data-parent="#accordionExample" id="collapse2">
                                        <div class="card-body">
                                            <?php echo e(__('home.answer2')); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div aria-expanded="false" class="card-header accordion-header collapsed" data-bs-target="#collapse3"
                                        data-bs-toggle="collapse"
                                        role="heading">
                                        <a>
                                            <div class="fa fa-angle-right rotate"></div>
                                        </a>
                                        <?php echo e(__('home.qst3')); ?>

                                    </div>
                                    <div class="collapse" data-parent="#accordionExample" id="collapse3">
                                        <div class="card-body">
                                            <?php echo e(__('home.answer3')); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div aria-expanded="false" class="card-header accordion-header collapsed" data-bs-target="#collapse4"
                                        data-bs-toggle="collapse"
                                        role="heading">
                                        <a>
                                            <div class="fa fa-angle-right rotate"></div>
                                        </a>
                                        <?php echo e(__('home.qst4')); ?>

                                    </div>
                                    <div class="collapse" data-parent="#accordionExample" id="collapse4">
                                        <div class="card-body">
                                            <?php echo e(__('home.answer4')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="link"><?php echo __('home.qst_text2'); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-img-block">
                        <img alt="faq-person" class="animate__animated animate__slideInUp animate__infinite animate__slow img-fluid" src="../assets/images/buddy/faq.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faq section -->

    <!-- subscribe section -->
    <section class="saas1 subscribe" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="media">
                        <lord-icon
                            src="https://cdn.lordicon.com/rhvddzym.json"
                            trigger="loop"
                            colors="primary:#ffffff,secondary:#ffffff"
                            style="width:120px;height:120px">
                        </lord-icon>
                        <div class="media-body" style="padding: 20px 20px 0">
                            <h3 class="mt-0 text-white">Subscribe To Buddy's Newsletter !</h3>
                            <h6 class="text-white">Subscribe now and be the first to revieve the latest news...
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="subscribe-input" style="padding-top: 30px">
                        <form>
                            <input id="useremail" placeholder="Email Adress" required type="email">
                            <input id="submit" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end subscribe section -->

    <!--brand slider start-->
    <section class="app2 brand-sliders p-t-100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title2">
                        <img alt="" class="img-fluid title-img" src="../assets/images/logo/2.png">
                        <h6 class="font-primary borders main-text"><span>Brands</span></h6>
                        <div class="sub-title">
                            <h2 class="title-text text-capitalize text-center">trusted us</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme brand-slider" id="brand-slider">
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../assets/images/app_landing2/brand/1.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../assets/images/app_landing2/brand/2.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../assets/images/app_landing2/brand/3.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../assets/images/app_landing2/brand/4.png">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img alt="" class="img-fluid" src="../assets/images/app_landing2/brand/5.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/js/script6.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\buddy_world\buddy_world\resources\views/home.blade.php ENDPATH**/ ?>