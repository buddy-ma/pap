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
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-listing')->html();
} elseif ($_instance->childHasBeenRendered('i61qhG5')) {
    $componentId = $_instance->getRenderedChildComponentId('i61qhG5');
    $componentTag = $_instance->getRenderedChildComponentTagName('i61qhG5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i61qhG5');
} else {
    $response = \Livewire\Livewire::mount('product-listing');
    $html = $response->html();
    $_instance->logRenderedChild('i61qhG5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   
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