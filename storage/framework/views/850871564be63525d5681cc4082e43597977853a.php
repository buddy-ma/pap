<section class="blog-section bg-white-2 w-100">
    <div class="container">
        
        <div class="news-wrap">
            <div class="row">


                <?php $__currentLoopData = $conseils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="200">
                            <a href="/conseils/<?php echo e($cns->slug); ?>" class="news-img-link">
                                <div class="news-item-img">
                                    <?php if(isset($cns->image)): ?>
                                        <img class="img-responsive" src="<?php echo e(asset('images/' . $cns->image)); ?>"
                                            alt="blog image">
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php echo e(asset('assets/images/blog/b-10.jpg')); ?>"
                                            alt="blog image">
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="news-item-text">
                                <div class="dates">
                                    <span class="date">
                                        <?php echo e($cns->updated_at->translatedFormat('F j, Y')); ?>

                                    </span>
                                </div>
                                <a href="/conseils/<?php echo e($cns->slug); ?>">
                                    <h3><?php echo e($cns->title); ?></h3>
                                </a>

                                <div class="news-item-descr big-news">
                                    <?php
                                        $txt = strip_tags($cns->text);
                                        $txt = html_entity_decode($txt);
                                    ?>
                                    <p><?php echo e(substr($txt, 0, 170)); ?>... </p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="/conseils/<?php echo e($cns->slug); ?>" class="news-link">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/resources/views/landing/conseils/catalogueConseilsMaroc.blade.php ENDPATH**/ ?>