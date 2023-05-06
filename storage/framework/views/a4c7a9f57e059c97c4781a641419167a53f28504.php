<?php $__env->startSection('title', $blog->title); ?>
<?php $__env->startSection('logo', 'blue'); ?>
<?php $__env->startSection('bodyClasses', 'inner-pages hd-white'); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .img-responsive {
            display: inline-block;
            max-width: 100%;
            width: 100%;
            max-height: 200px !important;
            height: auto;
        }

        .details .title {
            color: #3B84C5 !important;
            font-weight: 600 !important;
            text-transform: capitalize !important;
        }

        .admin p {
            font-weight: 500;
            color: #888;
        }

        .admin p b {
            font-weight: 800;
            color: #333;
        }

        .admin img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .news-item-descr p {
            line-height: 30px !important;
        }

        .news-item-descr h2 {
            line-height: 30px;
            font-weight: normal;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .news-item-descr h3 {
            line-height: 30px;
            font-weight: normal;
            margin-bottom: 20px;
            margin-top: 20px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    

    <section class="blog blog-section bg-white mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="news-item details no-mb2">
                        <div class="news-item-text details pb-0">
                            <h2 class="title mb-4"><?php echo e($blog->title); ?></h2>
                            

                            <div class="news-item-descr big-news details visib mb-0">
                                <p>
                                    <?php echo $blog->text; ?>

                                </p>
                                <?php if(isset($blog->pdf_link)): ?>
                                    <a class="btn btn-block btn-primary mt-5 border-0 font-weight-bold" target="_blank"
                                        href="<?php echo e(asset('files/' . $blog->pdf_link)); ?>" style="height: 60px; line-height: 50px">
                                        <i class="fas fa-download mr-2"></i>Telecharger la brochure PDF
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php echo $__env->make('landing.blogDetails.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/blogDetail.blade.php ENDPATH**/ ?>