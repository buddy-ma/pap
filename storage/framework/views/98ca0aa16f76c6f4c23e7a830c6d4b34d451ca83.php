<section class="blog-section bg-white-2 w-100">
    <div class="container">
        <div class="sec-title">
            <h2><span> Decouvrez </span> le Maroc.</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                <?php $__currentLoopData = $citys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="200">
                            <a href="/ville/<?php echo e($city->id); ?>" class="news-img-link">
                                <div class="news-item-img">
                                    <?php if(isset($city->image)): ?>
                                        <img class="img-responsive" src="<?php echo e(asset('images/villes/' . $city->image)); ?>"
                                            alt="blog image">
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php echo e(asset('assets/images/blog/b-10.jpg')); ?>"
                                            alt="blog image">
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="/ville/<?php echo e($city->id); ?>">
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
                                    <a href="/blog/<?php echo e($city->id); ?>" class="news-link">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/index/catalogueConseilsMaroc.blade.php ENDPATH**/ ?>