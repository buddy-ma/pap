<!-- STAR HEADER SEARCH -->
<section id="home" class="parallax-searchs section welcome-area overlay">
    <div class="hero-main">
        <div class="container">
            <form action="<?php echo e(route($active)); ?>" method="GET" id="heroForm">
                <input type="hidden" name="category_id" id="category_id" value="4" style="display: none">
                <div class="row">
                    
                    <div class="<?php if(isset($index)): ?> col-md-8 <?php endif; ?> col-12" style="max-width: 700px">
                        <div class="banner-search-wrap" data-aos="zoom-in">
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="rld-main-search" id="app">
                                        <ul class="nav nav-tabs rld-banner-tab mb-4">
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="tab1"
                                                    onclick="switchType('achat')">Achat</a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="tab2"
                                                    onclick="switchType('location')">Location</a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="tab3"
                                                    onclick="switchType('vacances')">Vacances</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" id="tab4"
                                                    onclick="switchType('immoneuf')">ImmoNeuf</a>
                                            </li>
                                        </ul>
                                        <div class="row px-3 mb-2">
                                            <div class="col-6 mb-md-4 px-xs-1">
                                                <div class="rld-single-input">
                                                    <div class="rld-single-select">
                                                        <select name="ville" @change="onChange($event)"
                                                            v-model="ville" class="select single-select mr-0">
                                                            <option value="">Villes</option>
                                                            <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($vll->title); ?>"
                                                                    <?php if($vll->title == $ville): ?> selected <?php endif; ?>>
                                                                    <?php echo e($vll->title); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-md-4 px-xs-1">
                                                <div class="rld-single-input">
                                                    <div class="rld-single-select">
                                                        <select name="quartier" v-if="results.length > 0"
                                                            class="select single-select mr-0">
                                                            <option value="">Quartiers</option>
                                                            <option :value="result.title" v-for="result in results"
                                                                :key="result.id">{{ result.title }}</option>
                                                        </select>
                                                        <select v-else name="quartier"
                                                            class="select single-select mr-0">
                                                            <option value="">Quartiers</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-md-4 px-xs-1">
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
                                            <div class="col-6 mb-md-4 px-xs-1">
                                                <div class="rld-single-input">
                                                    <select name="nbr_pieces" class="select single-select mr-0 w-100">
                                                        <option value="">Nombre de pieces</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7+</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-6 mb-md-4 px-xs-1">
                                                <div class="rld-single-input">
                                                    <input name="surface_min" value="<?php echo e($surface_min); ?>" type="number"
                                                        placeholder="Surface Min">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-md-4 px-xs-1">
                                                <div class="rld-single-input">
                                                    <input name="prix_max" value="<?php echo e($prix_max); ?>" type="number"
                                                        placeholder="Prix Max">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-md-4 px-xs-1">
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
                    $('#category_id').val(4);
                    $('#heroForm').attr('action', '<?php echo e(route('vacances')); ?>');
                    break;
                case "immoneuf":
                    $('#tab4').addClass('active');
                    $('#category_id').val(3);
                    $('#heroForm').attr('action', '<?php echo e(route('immoneuf')); ?>');
                    break;
                default:
                    $('#tab1').addClass('active');
                    $('#category_id').val(1);
            }
        }
    </script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    results: [],
                    ville: '',
                };
            },
            // mounted: function() {
            //     this.getData(this.ville);
            // },
            methods: {
                getData(ville) {
                    console.log(ville);
                    axios.get('/getQuartier', {
                            params: {
                                title: ville,
                            }
                        })
                        .then(response => {
                            this.results = response.data.quartiers;
                            console.log(this.results);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },
                onChange(event) {
                    this.getData(event.target.value);
                }
            }
        }).mount('#app')
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\le\Desktop\Projects\pap\resources\views/landing/hero.blade.php ENDPATH**/ ?>