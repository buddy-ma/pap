<?php $__env->startSection('css'); ?>
    <!--INTERNAL Select2 css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />
    <style>
        .selected {
            border: 2px solid #4bff37;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Product Villes List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="">Product Villes List</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Row -->
    <div class="row flex-lg-nowrap">
        <div class="col-12">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e($message); ?>.
                </div>
            <?php endif; ?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-villes-admin')->html();
} elseif ($_instance->childHasBeenRendered('1cHaXaL')) {
    $componentId = $_instance->getRenderedChildComponentId('1cHaXaL');
    $componentTag = $_instance->getRenderedChildComponentTagName('1cHaXaL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1cHaXaL');
} else {
    $response = \Livewire\Livewire::mount('product-villes-admin');
    $html = $response->html();
    $_instance->logRenderedChild('1cHaXaL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
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
        window.addEventListener('swal:addVille', event => {
            new swal({
                title: event.detail.title,
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                inputValue: event.detail.ville,
                showCancelButton: true,
                confirmButtonText: event.detail.button,
                showLoaderOnConfirm: true,
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    livewire.emit(event.detail.returnFunction, result.value);
                }
            })
        });

        window.addEventListener('swal:confirmDelete', event => {
            new swal({
                title: 'Es-tu sûr',
                text: event.detail.text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit(event.detail.returnFunction);
                }
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/mains-admin/products/product-villes.blade.php ENDPATH**/ ?>