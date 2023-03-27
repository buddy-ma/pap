<section class="blog-section bg-blue w-100">
    <div class="container">
        <div class="sec-title text-white text-center mb-5">
            <h2 class="text-white"><span class="text-white">Articles </span>Similaires</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                <?php $__currentLoopData = $similaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="200">
                            <a href="/blog/<?php echo e($art->id); ?>" class="news-img-link">
                                <div class="news-item-img">
                                    <?php if(isset($art->image)): ?>
                                        <img class="img-responsive" src="<?php echo e(asset('images/' . $art->image)); ?>"
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
                                        <?php echo e($art->updated_at->translatedFormat('F j, Y')); ?>

                                    </span>
                                    
                                </div>
                                <a href="/blog/<?php echo e($art->id); ?>">
                                    <h3><?php echo e($art->title); ?></h3>
                                </a>

                                <div class="news-item-descr big-news">
                                    <?php
                                        $txt = strip_tags($art->text);
                                        $txt = html_entity_decode($txt);
                                    ?>
                                    <p><?php echo e(substr($txt, 0, 170)); ?>... </p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="/blog/<?php echo e($art->id); ?>" class="news-link">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
<?php /**PATH /var/www/html/resources/views/landing/blogDetails/articleSimilaires.blade.php ENDPATH**/ ?>