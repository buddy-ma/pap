
<?php $__env->startSection('css'); ?>
    <!-- INTERNAL Select2 css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL File Uploads css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Date Picker css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/date-picker/date-picker.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fileupload/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- INTERNAL Mutipleselect css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/multipleselect/multiple-select.css')); ?>">

    <!-- INTERNAL Sumoselect css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/sumoselect.css')); ?>">

    <!-- INTERNAL Jquerytransfer css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/jQuerytransfer/jquery.transfer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/jQuerytransfer/icon_font/icon_font.css')); ?>">

    <!-- INTERNAL multi css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/multi/multi.min.css')); ?>">
    <!-- Include Quill stylesheet -->
    
    <!-- INTERNAl Quill css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('admin_assets/plugins/quill/quill.bubble.css')); ?>" rel="stylesheet">

    <!-- INTERNAl WYSIWYG Editor css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/wysiwyag/richtext.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL File Uploads css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fileupload/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- INTERNAL  Tabs css-->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/tabs/style.css')); ?>" rel="stylesheet" />

    <!--INTERNAL Select2 css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('admin_assets/plugins/dragula/dragula.css')); ?>" rel="stylesheet">

    <style>
        .picked {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0.7;
            transition: .5s ease;
            background-color: rgba(116, 51, 223, 0.9);
        }

        .icon {
            color: #fff;
            font-family: quicksand;
            text-transform: uppercase;
            letter-spacing: 2;
            font-weight: bold;
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('page-header'); ?>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Orders Statuses</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/status">Statuses</a></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
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
    $html = \Livewire\Livewire::mount('admin-email')->html();
} elseif ($_instance->childHasBeenRendered('0wXpoZ9')) {
    $componentId = $_instance->getRenderedChildComponentId('0wXpoZ9');
    $componentTag = $_instance->getRenderedChildComponentTagName('0wXpoZ9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0wXpoZ9');
} else {
    $response = \Livewire\Livewire::mount('admin-email');
    $html = $response->html();
    $_instance->logRenderedChild('0wXpoZ9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $("#add-product").submit(function() {
        $('#save').toggleClass('btn-primary btn-primary btn-loading');
        return true;
    });
</script>

<!-- INTERNAL File uploads js -->
<script src="<?php echo e(URL::asset('admin_assets/plugins/fileupload/js/dropify.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/js/filupload.js')); ?>"></script>


<!-- INTERNAL WYSIWYG Editor js -->
<script src="<?php echo e(URL::asset('admin_assets/plugins/wysiwyag/jquery.richtext.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/js/form-editor.js')); ?>"></script>

<!-- INTERNAL quill js -->
<script src="<?php echo e(URL::asset('admin_assets/plugins/quill/quill.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/js/form-editor2.js')); ?>"></script>

<!--- INTERNAL Tabs js-->
<script src="<?php echo e(URL::asset('admin_assets/plugins/tabs/jquery.multipurpose_tabcontent.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/js/tabs.js')); ?>"></script>

<!-- INTERNAL Select2 js -->
<script src="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/js/select2.js')); ?>"></script>

<!-- INTERNAL Datepicker js -->
<script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/date-picker.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/plugins/input-mask/jquery.maskedinput.js')); ?>"></script>

<!-- INTERNAL Multipleselect js -->
<script src="<?php echo e(URL::asset('admin_assets/plugins/multipleselect/multiple-select.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/plugins/multipleselect/multi-select.js')); ?>"></script>

<!--INTERNAL Sumoselect js-->
<script src="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>

<!--INTERNAL Form Advanced Element -->
<script src="<?php echo e(URL::asset('admin_assets/js/formelementadvnced.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/js/form-elements.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/plugins/dragula/dragula.js')); ?>"></script>
<script src="<?php echo e(URL::asset('admin_assets/plugins/dragula/example.min.js')); ?>"></script>
<script>
    function check(option) {
        document.getElementById("type").value = option;
        var x = document.getElementsByClassName("picked");
        x.forEach(function(part, index) {
            x[index].style.opacity = 0;
        });
        x[option - 1].style.opacity = 1;
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var postURL = "<?php echo url('addmore'); ?>";
        var i = 0;

        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i +
                '"><th scope="row" class="dynamic-added"><input class="form-control" type="file" name="sec_image' +
                i + '"></th><td><input class="form-control" type="text" name="sec_title' + i +
                '"></td><td><input class="form-control" type="text" name="sec_desc' + i +
                '"></td><td><input class="form-control" type="text" name="sec_btn' + i +
                '"></td><td><input class="form-control" type="number" name="sec_sort' + i +
                '"></td><td><button type="button" name="remove" id="' + i +
                '" class="btn btn-danger btn_remove">X</button></td></tr>');
            document.getElementById("max").value = i;
        });


        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/admin/mains-admin/landing/emails.blade.php ENDPATH**/ ?>