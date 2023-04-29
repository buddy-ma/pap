<div class="container">
    <div class="row">
        <?php $__currentLoopData = $blogs->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-12">
                <div class="property wprt-image-video w50 pro vid-si2">
                    <ul>
                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="/quartier/<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/landing/decouvrezMaroc/villeBlogs.blade.php ENDPATH**/ ?>