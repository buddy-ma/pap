
<?php $__env->startSection('title', 'Art'); ?>
<?php $__env->startSection('bodyClass', 'music'); ?>
<?php $__env->startSection('css'); ?>
    <?php $ar = App::getLocale() == 'ar' ? '_ar' : ''; ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/music-player.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/color-7.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/inner-page.css')); ?>" rel="stylesheet" type="text/css">

    <style>
        .navbar {
            margin-left: auto !important;
        }

        .phone {
            display: none !important;
        }

        @media  only screen and (min-width: 768px) {
            .logo {
                width: 30vh;
            }
        }

        @media  only screen and (max-width: 426px) {
            .music-bg {
                height: 80vh !important;
            }

            .souka {
                width: 790px !important;
                max-width: 200% !important;
                height: 70vh !important;
                position: absolute !important;
                left: -200px !important;
            }

            .navbar {
                margin-right: auto !important;
                margin-left: 0 !important;
            }

            .phone {
                display: block !important;
            }

            .no-phone {
                display: none !important;
            }
        }

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

        .portfolio-metro h1 {
            font-size: 80px;
            margin-bottom: 100px;
        }

        .app2.fixed ul li>a {
            color: #000;
        }

        .app2.fixed ul li a ul li a {
            color: #000;
        }

        .social_icon {
            background: #fff;
            padding: 5px 8px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .bio_text {
            font-size: 16px !important;
            line-height: 26px !important;
            letter-spacing: 1px !important;
            font-family: 'poppins', sans-serif;
            color: #666 !important;
            font-weight: 400 !important;
            margin-top: 0 !important;
            margin-bottom: 20px !important;
        }

        .bio_img {
            max-height: 500px;
            padding: 15px;
            border: 3px solid #333;

        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($header)): ?>
        <?php echo $__env->make('dynamic.header.second', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(isset($user->bio) && isset($user->avatar)): ?>
        <?php echo $__env->make('dynamic.bio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.bio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(!$designs->isEmpty()): ?>
        <?php echo $__env->make('dynamic.portfolio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.portfolio1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(!$services->isEmpty()): ?>
        <?php echo $__env->make('dynamic.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(!$numbers->isEmpty()): ?>
        <?php echo $__env->make('dynamic.numbers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.numbers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(!$plans->isEmpty()): ?>
        <?php echo $__env->make('dynamic.plans', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.plans', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <!--subscribe start-->
    <section class="resume subscribe" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="title title2">
                        <h3 class="subscribe-head">Need A Experienced Team For Your Project?</h3>
                        <p class="subscribe-sub-head font-primary">Drop your email here and we will be in touch with you
                            as
                            soon as possible!</p>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="subscribe">
                        <div>
                            <div class="form-group">
                                <form action="<?php echo e(route('save_emails')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="flex">
                                        <input class="form-control" name="email" style="border: 1px solid #000"
                                            placeholder="Please Enter Your Email Address" type="email">
                                        <div class="button-primary">
                                            <button class=" btn btn-default text-white primary-btn"
                                                type="submit">contact
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/art.blade.php ENDPATH**/ ?>