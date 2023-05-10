<section class="blog-section bg-white-2 w-100">
    <div class="container">
        <div class="sec-title text-white">
            <h2><span> Decouvrez </span> le Maroc.</h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-blogs">
                <?php $__currentLoopData = $citys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <a href="/ville/<?php echo e($city->title); ?>" class="news-img-link">
                                            <div class="news-item-img">
                                                <?php if(isset($city->image)): ?>
                                                    <img class="img-responsive"
                                                        src="<?php echo e(asset('images/villes/' . $city->image)); ?>"
                                                        alt="<?php echo e($city->title); ?>">
                                                <?php else: ?>
                                                    <img class="img-responsive"
                                                        src="<?php echo e(asset('assets/images/blog/b-10.jpg')); ?>"
                                                        alt="<?php echo e($city->title); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="homes-content">
                                    <a href="/ville/<?php echo e($city->title); ?>">
                                        <h3><?php echo e($city->title); ?></h3>
                                    </a>

                                    <div class="news-item-descr big-news">
                                        <?php
                                            $txt = strip_tags($city->text);
                                            $txt = html_entity_decode($txt);
                                        ?>
                                        <p><?php echo e(substr($txt, 0, 170)); ?>... </p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="/ville/<?php echo e($city->title); ?>" class="news-link">Read more...</a>
                                    </div>
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
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/index/catalogueConseilsMaroc.blade.php ENDPATH**/ ?>