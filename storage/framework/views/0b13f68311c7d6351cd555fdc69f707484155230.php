<?php $__env->startSection('title', $ville->title); ?>
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
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    

    <section class="blog blog-section bg-white mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="news-item details no-mb2">
                        <div class="news-item-text details pb-0">
                            <h2><?php echo e($ville->title); ?></h2>
                            <div class="dates">
                                <span class="date"><?php echo e($ville->updated_at->translatedFormat('F j, Y')); ?></span>
                            </div>
                            <div class="news-item-descr big-news details visib mb-0">
                                <p>
                                    <?php echo $ville->text; ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('landing.decouvrezMaroc.villeBlogs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($ville->video)): ?>
        <div class="container">
            <div class="property wprt-image-video w50 pro vid-si2">
                <h5>Video</h5>
                <div style="position:relative;padding-top:56.25%;">
                    <iframe src="<?php echo e($ville->video); ?>" frameborder="0" allowfullscreen
                        style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- START FOOTER -->
    <footer class="first-footer ">
        <div class="top-footer bg-blue w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Achat</h3>
                            <div class="nav-footer">
                                <ul>
                                    <?php $__currentLoopData = $achat_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($ach->link); ?>"><?php echo e($ach->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Location</h3>
                            <div class="nav-footer">
                                <ul>
                                    <?php $__currentLoopData = $location_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($loc->link); ?>"><?php echo e($loc->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>ImmoNeuf</h3>
                            <div class="nav-footer">
                                <ul>
                                    <?php $__currentLoopData = $immoneuf_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($immo->link); ?>"><?php echo e($immo->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Vacances</h3>
                            <div class="nav-footer">
                                <ul>
                                    <?php $__currentLoopData = $vacances_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($vc->link); ?>"><?php echo e($vc->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/villeDetails.blade.php ENDPATH**/ ?>