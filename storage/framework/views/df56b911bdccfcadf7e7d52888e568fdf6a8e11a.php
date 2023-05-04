
<?php $__env->startSection('css'); ?>
    <!-- INTERNAL File Uploads css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fileupload/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />
    <!--INTERNAL Select2 css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Sumoselect css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/sumoselect.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }

        .dark-mode .bootstrap-tagsinput {

            color: rgba(255, 255, 255, 1) !important;
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark-mode .bootstrap-tagsinput input {
            color: rgba(255, 255, 255, 1) !important;
        }
    </style>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Create Product</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fe fe-layout  mr-2 fs-14"></i>Tables</li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-product')->html();
} elseif ($_instance->childHasBeenRendered('6l8icE5')) {
    $componentId = $_instance->getRenderedChildComponentId('6l8icE5');
    $componentTag = $_instance->getRenderedChildComponentTagName('6l8icE5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6l8icE5');
} else {
    $response = \Livewire\Livewire::mount('add-product');
    $html = $response->html();
    $_instance->logRenderedChild('6l8icE5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- INTERNAL Select2 js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/select2.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/date-picker.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/input-mask/jquery.maskedinput.js')); ?>"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.ui.widget.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.iframe-transport.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.fancy-fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy-uploader.js')); ?>"></script>

    <!-- INTERNAL File uploads js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fileupload/js/dropify.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/filupload.js')); ?>"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="<?php echo e(URL::asset('admin_assets/js/formelementadvnced.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/form-elements.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/file-upload.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>
    <script>
        window.addEventListener('swal:addBien', event => {
            var form = document.createElement("div");
            form.innerHTML = `
                <div class="form-row">
                    <div class="form-group col-6 mb-0">
                        <div class="form-group">
                            <label class="form-label text-left">Titre*</label>
                            <input type="text" name="title" class="form-control" id="title" required/>
                        </div>
                    </div>
                    <div class="form-group col-6 mb-0">
                        <div class="form-group">
                            <label class="form-label text-left">Prix*</label>
                            <input type="text" name="prix" class="form-control" id="prix" required/>
                        </div>
                    </div>
                    <div class="form-group col-12 mb-0">
                        <div class="form-group">
                            <label class="form-label text-left">Surface*</label>
                            <input type="text" name="surface" class="form-control" id="surface" /><br>
                        </div>
                    </div>
                </div>
            `;

            new swal({
                title: 'Ajouter appartement',
                html: form,
                showCancelButton: true,
                confirmButtonText: 'Save',
                showLoaderOnConfirm: true,
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    var title = document.getElementById("title").value;
                    var prix = document.getElementById("prix").value;
                    var surface = document.getElementById("surface").value;
                    Livewire.emit('submitAddBien', title, prix, surface);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/admin/mains-admin/products/product-add.blade.php ENDPATH**/ ?>