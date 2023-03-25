<?php $__env->startSection('css'); ?>
    <!--INTERNAL Select2 css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Produits</h4>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row flex-lg-nowrap mt-5">
        <div class="col-12">
            <?php if(Session::get('success')): ?>
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <div class="row flex-lg-nowrap">
                <div class="col-lg-9">
                    <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-xl-4 col-6">
                                <div class="card item-card">
                                    <div class="card-body pb-0">
                                        <div class="text-center">
                                            <img src="<?php echo e(URL::asset('storage/product/images/' . $product->first_image()->image ?? 'admin_assets/images/products/1.jpg')); ?>"
                                                alt="img" class="img-fluid w-100">
                                        </div>
                                        <div class="card-body px-0 ">
                                            <div class="cardtitle">
                                                <a class="shop-title"><?php echo e($product->title); ?></a>
                                            </div>
                                            <div class="cardprice">
                                                <span class="number-font"><?php echo e($product->prix); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center pb-4 pl-4 pr-4">
                                        <a href="#" class="btn btn-primary btn-block mb-2">
                                            <i class="fe fe-eye mr-1"></i>View More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-warning d-block w-100" role="alert">
                                <i class="fa fa-exclamation mr-2" aria-hidden="true"></i> No products!
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="card-title"> Categories &amp; Fliters</div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                            id="checkbox-1" checked="">
                                        <label for="checkbox-1" class="custom-control-label">Mens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                            id="checkbox-2">
                                        <label for="checkbox-2" class="custom-control-label">Womens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                            id="checkbox-3">
                                        <label for="checkbox-3" class="custom-control-label">Kids</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                            id="checkbox-4">
                                        <label for="checkbox-4" class="custom-control-label">Others</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-label">Category</label>
                                        <select name="beast" id="select-beast"
                                            class="form-control custom-select select2-show-search">
                                            <option value="0">--Select--</option>
                                            <option value="1">Dress</option>
                                            <option value="2">Bags &amp; Purses</option>
                                            <option value="3">Coat &amp; Jacket</option>
                                            <option value="4">Beauty</option>
                                            <option value="5">Jeans</option>
                                            <option value="5">Jewellery</option>
                                            <option value="5">Electronics</option>
                                            <option value="5">Sports</option>
                                            <option value="5">Technology</option>
                                            <option value="5">Watches</option>
                                            <option value="5">Accessories</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Brand</label>
                                        <select name="beast" class="form-control custom-select select2-show-search">
                                            <option value="0">--Select--</option>
                                            <option value="1">White</option>
                                            <option value="2">Black</option>
                                            <option value="3">Red</option>
                                            <option value="4">Green</option>
                                            <option value="5">Blue</option>
                                            <option value="6">Yellow</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="beast" class="form-control custom-select select2-show-search">
                                            <option value="0">--Select--</option>
                                            <option value="1">Extra Small</option>
                                            <option value="2">Small</option>
                                            <option value="3">Medium</option>
                                            <option value="4">Large</option>
                                            <option value="5">Extra Large</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Color</label>
                                        <select name="beast" class="form-control custom-select select2">
                                            <option value="0">--Select--</option>
                                            <option value="1">White</option>
                                            <option value="2">Black</option>
                                            <option value="3">Red</option>
                                            <option value="4">Green</option>
                                            <option value="5">Blue</option>
                                            <option value="6">Yellow</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- INTERNAl Data tables -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/js/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/datatables.js')); ?>"></script>

    <!-- INTERNAL Clipboard js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/clipboard/clipboard.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/clipboard/clipboard.js')); ?>"></script>

    <!-- INTERNAL Prism js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/prism/prism.js')); ?>"></script>
    <!-- INTERNAL Select2 js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/select2.js')); ?>"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="<?php echo e(URL::asset('admin_assets/js/formelementadvnced.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/form-elements.js')); ?>"></script>
    
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatus',
                    data: {
                        'status': status,
                        'user_id': user_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/mains-admin/products/product-list.blade.php ENDPATH**/ ?>