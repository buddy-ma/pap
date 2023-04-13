<section class="blog-section bg-blue w-100">
    <div class="container">
        <div class="sec-title text-white">
            <h2 class="text-white"><span class="text-white">Catalogue des </span>Conseils</h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-blogs">
                <?php $__currentLoopData = $conseils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <a href="/blog/<?php echo e($cns->id); ?>" class="news-img-link">
                                            <div class="news-item-img">
                                                <?php if(isset($cns->image)): ?>
                                                    <img class="img-responsive" src="<?php echo e(asset('images/' . $cns->image)); ?>"
                                                        alt="blog image">
                                                <?php else: ?>
                                                    <img class="img-responsive"
                                                        src="<?php echo e(asset('assets/images/blog/b-10.jpg')); ?>" alt="blog image">
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="homes-content">
                                    <div class="dates">
                                        <span class="date">
                                            <?php echo e($cns->updated_at->translatedFormat('F j, Y')); ?>

                                        </span>
                                    </div>
                                    <a href="/blog/<?php echo e($cns->id); ?>">
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
                                        <a href="/blog/<?php echo e($cns->id); ?>" class="news-link">Read more...</a>
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
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/index/catalogueConseils.blade.php ENDPATH**/ ?>