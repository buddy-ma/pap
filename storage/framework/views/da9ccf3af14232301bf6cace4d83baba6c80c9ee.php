<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Achat</h3>
                        <div class="nav-footer">
                            <ul>
                                <?php $__currentLoopData = $achat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/produit/<?php echo e($ach->id); ?>"><?php echo e($ach->title); ?></a></li>
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
                                <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/produit/<?php echo e($loc->id); ?>"><?php echo e($loc->title); ?></a></li>
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
                                <?php $__currentLoopData = $immoneuf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/produit/<?php echo e($immo->id); ?>"><?php echo e($immo->title); ?></a></li>
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
                                <?php $__currentLoopData = $vacances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/blog/<?php echo e($vc->id); ?>"><?php echo e($vc->title); ?></a></li>
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