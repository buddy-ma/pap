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
                                <?php $__currentLoopData = $achat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/produit/<?php echo e($ach->slug); ?>"><?php echo e($ach->title); ?></a></li>
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
                                    <li><a href="/produit/<?php echo e($loc->slug); ?>"><?php echo e($loc->title); ?></a></li>
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
                                    <li><a href="/produit/<?php echo e($immo->slug); ?>"><?php echo e($immo->title); ?></a></li>
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
                                    <li><a href="/produit/<?php echo e($vc->slug); ?>"><?php echo e($vc->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<?php /**PATH /var/www/html/resources/views/landing/blogDetails/footer.blade.php ENDPATH**/ ?>