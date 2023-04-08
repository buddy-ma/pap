<!-- STAR HEADER SEARCH -->
<section id="home" class="parallax-searchs section welcome-area overlay">
    <div class="hero-main">
        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-12" style="max-width: 700px">
                        <div class="banner-search-wrap" data-aos="zoom-in">
                            <ul class="nav nav-tabs rld-banner-tab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs_1">Achat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs_2">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs_3">Vacances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs_4">ImmoNeuf</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="rld-main-search">
                                        <div class="row px-3 mb-2">
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select mr-0">
                                                            <option>Villes</option>
                                                            <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($ville); ?>"><?php echo e($ville); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select mr-0">
                                                            <option>Quartiers</option>
                                                            <?php $__currentLoopData = $quartiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qrt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($qrt); ?>"><?php echo e($qrt); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option>Type</option>
                                                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($type->id); ?>"><?php echo e($type->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <div class="rld-single-input">
                                                    <input type="number" placeholder="Nbr. pieces"
                                                        max="<?php echo e($nbr_pieces); ?>">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <input type="number" placeholder="Surface Min">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <input type="number" placeholder="Prix Max">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Réference...">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a class="btn btn-yellow w-100" href="#">Recherchez</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Search Form -->
                </div>
            </form>
        </div>
    </div>
</section>
<!-- END HEADER SEARCH -->
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/achat/hero.blade.php ENDPATH**/ ?>