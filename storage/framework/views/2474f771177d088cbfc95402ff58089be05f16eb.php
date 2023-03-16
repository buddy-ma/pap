
<?php $__env->startSection('title', 'Art'); ?>
<?php $__env->startSection('bodyClass', 'agency'); ?>
<?php $__env->startSection('css'); ?>
    <?php $ar = App::getLocale() == 'ar' ? '_ar' : ''; ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/color-7.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/inner-page.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/buddy' . $ar . '.css')); ?>" rel="stylesheet" type="text/css">

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--breadcrumb section start-->
    <section class="portfolio-metro bg p-b-0">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 text-center ">
                        <div class="portfolio_section">
                            <div>
                                <h1 class="breadcrumb-text">Welcome to soukaina's <span
                                        class="bold-text color-animated">Art.</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <img alt="" class="img-fluid man" src="<?php echo e(asset('assets/images/artist.png')); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!-- section start -->
    <section class="portfolio-section portfolio-metro zoom-gallery" id="portfolio">
        <div class="filter-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
                                <li class="active"><a data-filter="*" href="#"> All </a></li>
                                <li><a data-filter=".digital" href="#"> Digital Art </a></li>
                                <li><a data-filter=".portrait" href="#"> Portaits </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                    $cats = ['digital', 'portrait'];
                ?>
                <div class="isotopeContainer row">
                    <?php $__empty_1 = true; $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($loop->index == 4 || $loop->index == 5): ?>
                            <div class="col-lg-4 col-md-4 col-6 isotopeSelector <?php echo e($cats[$design->category_id - 1]); ?>">
                            <?php else: ?>
                                <div class="col-lg-2 col-md-4 col-6 isotopeSelector <?php echo e($cats[$design->category_id - 1]); ?>">
                        <?php endif; ?>
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="<?php echo e(asset('assets' . $design->image)); ?>">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="<?php echo e(asset('assets' . $design->image)); ?>">
                                </a>
                            </div>
                        </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                empty
                <?php endif; ?>

            </div>
        </div>
        </div>
    </section>
    <!-- Section ends -->

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

                <div class="col-lg-4">
                    <div class="service bg-white">
                        <div class="img-block">
                            <lord-icon src="https://cdn.lordicon.com/xhbsnkyp.json" trigger="hover"
                                colors="outline:#121331,primary:#92140c,secondary:#f9c9c0" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text text-center">Digital design</h4>
                            <p>Building up a new brand involves a variety of different aspects, including new identity
                                design, logo design, business card designs and more! We can provide all of these services
                                for you to really get your new branding noticed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service bg-white">
                        <div class="img-block">
                            <lord-icon src="https://cdn.lordicon.com/hqrgkqvs.json" trigger="hover"
                                colors="outline:#121331,primary:#f28ba8,secondary:#ebe6ef" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text text-center">Graphic Design</h4>
                            <p>Our prospect is to provide the best solution in the field and by finding the best inspiration
                                sources in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service bg-white">
                        <div class="img-block">
                            <lord-icon src="https://cdn.lordicon.com/alzqexpi.json" trigger="hover"
                                colors="primary:#121331,secondary:#646e78,tertiary:#fad1e6,quaternary:#f49cc8,quinary:#ffffff"
                                style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text text-center">portrait</h4>
                            <p>Our main focus is to help small business to start on the right foot by creating a good
                                marketing designs & solutions to help them grow.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--services start-->

    <!--counter start-->
    <section class="resume counter">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-6 counter-container">
                    <div class="counters">
                        <img alt="" class="img-fluid counter-img" src="../assets/images/resume/icon/1.png">
                        <div class="counter-text">
                            <h3 class="count-text counts">30</h3>
                            <h5 class="count-desc">Satisfied customers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 counter-container">
                    <div class="counters">
                        <img alt="" class="img-fluid counter-img" src="../assets/images/resume/icon/2.png">
                        <div class="counter-text">
                            <h3 class="count-text counts">35</h3>
                            <h5 class="count-desc">Project Made</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 counter-container">
                    <div class="counters">
                        <img alt="" class="img-fluid counter-img" src="../assets/images/resume/icon/3.png">
                        <div class="counter-text">
                            <h3 class="count-text counts">51536</h3>
                            <h5 class="count-desc">Hours Worked</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 counter-container">
                    <div class="counters">
                        <img alt="" class="img-fluid counter-img" src="../assets/images/resume/icon/4.png">
                        <div class="counter-text">
                            <h3 class="count-text counts">12</h3>
                            <h5 class="count-desc">Awwards Winning</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter end-->

    <!--pricing start-->
    <section class="resume pricing bg-pink" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title title2">
                        <h6 class="font-primary borders main-text text-uppercase"><span>pricing</span></h6>
                        <div class="sub-title">
                            <div>
                                <h2>you can hire me</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme pricing-slider">
                        <div class="item">
                            <div class="price-container price-margin shadows bg-white text-center">
                                <div class="price-feature-container set-relative">
                                    <div class="feature-text">
                                        <span class="flaticon-rocket-ship feature-icon"></span>
                                        <h4 class="feature-text-heading bold text-uppercase">Identity</h4>
                                        <hr class="set-border">
                                    </div>
                                    <div class="price-features">
                                        <h5 class="price-feature">Logo</h5>
                                        <h5 class="price-feature">Visit card</h5>
                                        <h5 class="price-feature">Poster/Flyer about the business</h5>
                                    </div>
                                    <div class="price-value">
                                        <h6 class="price text-center"><span class="large">500</span>MAD</h6>
                                    </div>
                                    <a class="btn btn-default back-white" href="#">Get in touch</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="price-container price-margin shadows bg-white text-center">
                                <div class="price-feature-container set-relative">
                                    <div class="feature-text">
                                        <span class="flaticon-diamond feature-icon"></span>
                                        <h4 class="feature-text-heading bold text-uppercase">Cosmetic branding</h4>
                                        <hr class="set-border">
                                    </div>
                                    <div class="price-features">
                                        <h5 class="price-feature">Logo</h5>
                                        <h5 class="price-feature">Visit card</h5>
                                        <h5 class="price-feature">5 products sticker</h5>
                                    </div>
                                    <div class="price-value">
                                        <h6 class="price text-center"><span class="large">700</span>MAD</h6>
                                    </div>
                                    <a class="btn btn-default back-white" href="#">Get in touch</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="price-container price-margin shadows bg-white text-center">
                                <div class="price-feature-container set-relative">
                                    <div class="feature-text">
                                        <span class="flaticon-pie-chart feature-icon"></span>
                                        <h4 class="feature-text-heading bold text-uppercase">Golden</h4>
                                        <hr class="set-border">
                                    </div>
                                    <div class="price-features">
                                        <h5 class="price-feature">Easy Installations</h5>
                                        <h5 class="price-feature">Unlimited support</h5>
                                        <h5 class="price-feature">Free Forever</h5>
                                    </div>
                                    <div class="price-value">
                                        <h6 class="price text-center">$<span class="large">100</span>/month</h6>
                                    </div>
                                    <a class="btn btn-default back-white" href="#">purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing end-->

    <!--subscribe start-->
    <section class="resume subscribe" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="title title2">
                        <h3 class="subscribe-head">Need A Experienced Team For Your Project?</h3>
                        <p class="subscribe-sub-head font-primary">Drop your email here and we will be in touch with you as
                            soon as possible !</p>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="subscribe">
                        <div>
                            <div class="form-group">
                                <form action="<?php echo e(route('save_emails')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="flex">
                                        <input class="form-control" name="email"
                                            placeholder="Please Enter Your Email Address" type="email">
                                        <div class="button-primary">
                                            <button class=" btn btn-default text-white primary-btn" type="submit">contact
                                                me
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/js/portfolio.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script7.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/zoom-gallery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/counters.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script>
        var initialSrc = "../../assets/images/logo_wh.png";
        var scrollSrc = "../../assets/images/logo.png";

        $(window).scroll(function() {
            if ($(window).scrollTop()) {
                $('header').removeClass('nav-down').addClass('nav-up');
                $("#logo").attr("src", initialSrc);
            } else {
                $('header').removeClass('nav-up').addClass('nav-down');
                $("#logo").attr("src", scrollSrc);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\buddy_old\resources\views/art.blade.php ENDPATH**/ ?>