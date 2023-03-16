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
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <script src="https://unpkg.com/vue@3"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Create Blog</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="fe fe-layout  mr-2 fs-14"></i>Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">Update Blog</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Blog </h3>
                </div>
                <div class="card-body pb-2">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success" role="alert"><button type="button" class="close"
                                data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e($message); ?>.
                        </div>
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" action="<?php echo e(route('blog-add')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" />
                                            </div>

                                            <div class="col-lg">
                                                <label>Subtitle</label>
                                                <input type="text" name="subtitle" class="form-control" />
                                            </div>
                                            <div class="col-lg">
                                                <label class="d-block">Tags </label>
                                                <input name="tags" type="text" class="form-control" id="tags"
                                                    data-role="tagsinput" data-cls-tag-title="text-bold fg-blue" />
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg">
                                                <input type="file" class="dropify" data-height="180" name="image" />
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <label>Description :</label>
                                            <textarea name="editor1" rows="500" style="min-height: 500px;"></textarea>
                                        </div>

                                        <div class="btn-list text-right">
                                            <button name="action" type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        <script type="text/javascript">
            CKEDITOR.config.height = 1000;
            CKEDITOR.replace('editor1', {
                filebrowserUploadUrl: "<?php echo e(route('blog-add', ['_token' => csrf_token()])); ?>",
                filebrowserUploadMethod: 'form'
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.dropdown-submenu a.test').on("click", function(e) {
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
        <script>
            $('#tags').tagsinput({
                maxTags: 3
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="/js/app.js"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/mains-admin/blogs/blog-add.blade.php ENDPATH**/ ?>