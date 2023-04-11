<!-- STAR HEADER SEARCH -->
<section id="home" class="parallax-searchs section welcome-area overlay">
    <div class="hero-main">
        <div class="container">
            <form action="<?php echo e(route($active)); ?>" method="GET" id="heroForm">
                <input type="hidden" name="category_id" id="category_id" value="4" style="display: none">

                <div class="row">
                    <div class="col-12" style="max-width: 700px">
                        <div class="banner-search-wrap" data-aos="zoom-in">
                            <ul class="nav nav-tabs rld-banner-tab">
                                <li class="nav-item">
                                    <a class="nav-link" id="tab1" onclick="switchType('achat')">Achat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" onclick="switchType('location')">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" onclick="switchType('vacances')">Vacances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab4" onclick="switchType('immoneuf')">ImmoNeuf</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="rld-main-search">
                                        <div class="row px-3 mb-2">
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <div class="rld-single-select">
                                                        <select id="form_ville" name="ville"
                                                            class="select single-select mr-0">
                                                            <option value="">Villes</option>
                                                            <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($vll); ?>"
                                                                    <?php if($vll == $ville): ?> selected <?php endif; ?>>
                                                                    <?php echo e($vll); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <div class="rld-single-select">
                                                        <select name="quartier" class="select single-select mr-0">
                                                            <option value="">Quartiers</option>
                                                            <?php $__currentLoopData = $quartiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qrt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($qrt); ?>"
                                                                    <?php if($quartier == $qrt): ?> selected <?php endif; ?>>
                                                                    <?php echo e($qrt); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <div class="rld-single-select">
                                                    <select name="type_id" class="select single-select mr-0">
                                                        <option value="">Type</option>
                                                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($type->id); ?>"
                                                                <?php if($type_id == $type->id): ?> selected <?php endif; ?>>
                                                                <?php echo e($type->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <div class="rld-single-input">
                                                    <input name="nbr_pieces" type="number" placeholder="Nbr. pieces"
                                                        max="<?php echo e($nbr_pieces); ?>">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <input name="surface_min" value="<?php echo e($surface_min); ?>" type="number"
                                                        placeholder="Surface Min">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <div class="rld-single-input">
                                                    <input name="prix_max" value="<?php echo e($prix_max); ?>" type="number"
                                                        placeholder="Prix Max">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <div class="rld-single-input">
                                                    <input name="reference" value="<?php echo e($reference); ?>" type="text"
                                                        placeholder="Réference...">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-yellow w-100">Recherchez</button>
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

<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function() {
            var active = '<?php echo e($active); ?>';
            switchType(active);
        });

        function switchType(n) {
            $('.nav-link').removeClass('active');
            switch (n) {
                case "achat":
                    $('#tab1').addClass('active');
                    $('#category_id').val(1);
                    $('#heroForm').attr('action', '<?php echo e(route('achat')); ?>');
                    break;
                case "location":
                    $('#tab2').addClass('active');
                    $('#category_id').val(2);
                    $('#heroForm').attr('action', '<?php echo e(route('location')); ?>');
                    break;
                case "vacances":
                    $('#tab3').addClass('active');
                    $('#category_id').val(3);
                    $('#heroForm').attr('action', '<?php echo e(route('vacances')); ?>');
                    break;
                case "immoneuf":
                    $('#tab4').addClass('active');
                    $('#category_id').val(4);
                    $('#heroForm').attr('action', '<?php echo e(route('immoneuf')); ?>');
                    break;
                default:
                    $('#tab1').addClass('active');
                    $('#category_id').val(1);
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/resources/views/landing/hero.blade.php ENDPATH**/ ?>