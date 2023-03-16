@extends('admin.layouts.master')
@section('css')
    <!-- INTERNAL File Uploads css -->
    <link href="{{URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="{{URL::asset('admin_assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css" />
    <!--INTERNAL Select2 css -->
    <link href="{{URL::asset('admin_assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
    <!--Page header-->

    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Customers</h4>
        </div>
    </div>

@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Upload Price List</h3>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body pb-2">
                    <form action="{{route('savePricelist')}}" method='POST' role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="expanel expanel-default">

                            <div class="expanel-body">
                                <div class="row row-sm">
                                    <div class="col-lg">

                                        <label class="col-md-12 form-label">Upload</label>
                                        <input type="file" class="dropify" data-height="180" name="uploaded_file"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px">
                            <button type="submit" class="btn btn-success mt-4 mb-0" style="width: 10%; margin-right: 5px">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{URL::asset('admin_assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/select2.js')}}"></script>

    <!-- INTERNAL Timepicker js -->
    <script src="{{URL::asset('admin_assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/time-picker/toggles.min.js')}}"></script>

        <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('admin_assets/plugins/date-picker/date-picker.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/date-picker/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{URL::asset('admin_assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <!-- INTERNAL File uploads js -->
    <script src="{{URL::asset('admin_assets/plugins/fileupload/js/dropify.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/filupload.js')}}"></script>

    <!-- INTERNAL Multipleselect js -->
    <script src="{{URL::asset('admin_assets/plugins/multipleselect/multiple-select.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/multipleselect/multi-select.js')}}"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="{{URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

    <!--INTERNAL telephoneinput js-->
    <script src="{{URL::asset('admin_assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
    <script src="{{URL::asset('admin_assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

    <!--INTERNAL jquery transfer js-->
    <script src="{{URL::asset('admin_assets/plugins/jQuerytransfer/jquery.transfer.js')}}"></script>

    <!--INTERNAL multi js-->
    <script src="{{URL::asset('admin_assets/plugins/multi/multi.min.js')}}"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="{{URL::asset('admin_assets/js/formelementadvnced.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/form-elements.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/file-upload.js')}}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        window.addEventListener('swal:modal', event => {
            new swal({
                title: event.detail.message,
                icon: event.detail.type,
            });
        });
    </script>


@endsection
