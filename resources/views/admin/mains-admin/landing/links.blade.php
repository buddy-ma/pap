@extends('admin.layouts.master')
@section('css')
    <!-- INTERNAL Select2 css -->
    <link href="{{ URL::asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- INTERNAL File Uploads css -->
    <link href="{{ URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

    <!-- INTERNAL Date Picker css -->
    <link href="{{ URL::asset('admin_assets/plugins/date-picker/date-picker.css') }}" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="{{ URL::asset('admin_assets/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

    <!-- INTERNAL Mutipleselect css-->
    <link rel="stylesheet" href="{{ URL::asset('admin_assets/plugins/multipleselect/multiple-select.css') }}">

    <!-- INTERNAL Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('admin_assets/plugins/sumoselect/sumoselect.css') }}">

    <!-- INTERNAL Jquerytransfer css-->
    <link rel="stylesheet" href="{{ URL::asset('admin_assets/plugins/jQuerytransfer/jquery.transfer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin_assets/plugins/jQuerytransfer/icon_font/icon_font.css') }}">

    <!-- INTERNAL multi css-->
    <link rel="stylesheet" href="{{ URL::asset('admin_assets/plugins/multi/multi.min.css') }}">
    <!-- Include Quill stylesheet -->
    {{-- <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet"> --}}
    <!-- INTERNAl Quill css -->
    <link href="{{ URL::asset('admin_assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">

    <!-- INTERNAl WYSIWYG Editor css -->
    <link href="{{ URL::asset('admin_assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />

    <!-- INTERNAL File Uploads css -->
    <link href="{{ URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="{{ URL::asset('admin_assets/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

    <!-- INTERNAL  Tabs css-->
    <link href="{{ URL::asset('admin_assets/plugins/tabs/style.css') }}" rel="stylesheet" />

    <!--INTERNAL Select2 css -->
    <link href="{{ URL::asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <style>
        .picked{
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
@endsection
@section('content')
    <!-- Row -->
    <div class="row flex-lg-nowrap">
        <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>{{ $message }}.
                </div>
            @endif

            @livewire('links')

        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        $( "#add-product" ).submit(function() {
            $('#save').toggleClass('btn-primary btn-primary btn-loading');
            return true;
        });
    </script>

    <!-- INTERNAL File uploads js -->
    <script src="{{ URL::asset('admin_assets/plugins/fileupload/js/dropify.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/filupload.js') }}"></script>


    <!-- INTERNAL WYSIWYG Editor js -->
    <script src="{{ URL::asset('admin_assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/form-editor.js') }}"></script>

    <!-- INTERNAL quill js -->
    <script src="{{ URL::asset('admin_assets/plugins/quill/quill.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/form-editor2.js') }}"></script>

    <!--- INTERNAL Tabs js-->
    <script src="{{ URL::asset('admin_assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/tabs.js') }}"></script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ URL::asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/select2.js') }}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{ URL::asset('admin_assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <!-- INTERNAL Multipleselect js -->
    <script src="{{ URL::asset('admin_assets/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/multipleselect/multi-select.js') }}"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="{{ URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="{{ URL::asset('admin_assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/form-elements.js') }}"></script>

    <script>
        function check(option) {
            document.getElementById("type").value = option;
            var x = document.getElementsByClassName("picked");
            x.forEach(function(part, index) {
                x[index].style.opacity = 0;
            });
            x[option-1].style.opacity = 1;
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var postURL = "<?php echo url('addmore'); ?>";
            var i=0;

            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><th scope="row" class="dynamic-added"><input class="form-control" type="file" name="sec_image'+i+'"></th><td><input class="form-control" type="text" name="sec_title'+i+'"></td><td><input class="form-control" type="text" name="sec_desc'+i+'"></td><td><input class="form-control" type="text" name="sec_btn'+i+'"></td><td><input class="form-control" type="number" name="sec_sort'+i+'"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
                document.getElementById("max").value = i;
            });


            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });
    </script>
@endsection

