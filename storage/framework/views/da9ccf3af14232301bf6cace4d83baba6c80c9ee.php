<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Villes</h3>
                        <div class="nav-footer">
                            <ul>
                                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/ville/<?php echo e($ville->id); ?>"><?php echo e($ville->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Conseils</h3>
                        <div class="nav-footer">
                            <ul>
                                <?php $__currentLoopData = $all_conseils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conseil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/blog/<?php echo e($conseil->id); ?>"><?php echo e($conseil->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Decouvrez le maroc</h3>
                        <div class="nav-footer">
                            <ul>
                                <?php $__currentLoopData = $all_dm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/blog/<?php echo e($dm->id); ?>"><?php echo e($dm->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Decouvrez le maroc</h3>
                        <div class="nav-footer">
                            <ul>
                                <?php $__currentLoopData = $all_dm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/blog/<?php echo e($dm->id); ?>"><?php echo e($dm->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>2023 © Copyright - All Rights Reserved.</p>
            <ul class="netsocials">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<?php /**PATH /var/www/html/resources/views/partials/footer.blade.php ENDPATH**/ ?>