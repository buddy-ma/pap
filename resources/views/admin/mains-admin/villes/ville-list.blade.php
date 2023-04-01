@extends('admin.layouts.master')
@section('css')
    <!--INTERNAL Select2 css -->
    <link href="{{ URL::asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <script src="https://unpkg.com/vue@3"></script>
@endsection

@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 d-block">Liste de villes
            </h4>
        </div>
        <a class="btn btn-success float-right ml-auto"> <i class="fa fa-plus"></i> Ajouter</a>
    </div>
@endsection
@section('content')
    <div class="row">
        @foreach ($villes as $ville)
            <div class="col-3">
                <div class="card overflow-hidden">
                    <img src="{{ asset('images/villes/' . $ville->image) }}" alt="image" class="card-image1 ">
                    <div class="card-body">
                        <h3 class="card-title mb-3">{{ $ville->title }}</h3>
                        @php
                            $txt = strip_tags($ville->text);
                            $txt = html_entity_decode($txt);
                        @endphp
                        <p class="card-text">{{ substr($txt, 0, 100) }}...</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="/admin/villes/edit/{{ $ville->id }}"> <i class="fa fa-edit"></i>
                            Modifier</a>
                        <a class="btn btn-danger" href="/admin/villes/delete/{{ $ville->id }}"> <i
                                class="fa fa-trash"></i>
                            Supprimer</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
@section('js')
    <!-- INTERNAl Data tables -->
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/datatables.js') }}"></script>

    <!-- INTERNAL Clipboard js -->
    <script src="{{ URL::asset('admin_assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/clipboard/clipboard.js') }}"></script>

    <!-- INTERNAL Prism js -->
    <script src="{{ URL::asset('admin_assets/plugins/prism/prism.js') }}"></script>
    <!-- INTERNAL Select2 js -->
    <script src="{{ URL::asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/select2.js') }}"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="{{ URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="{{ URL::asset('admin_assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/form-elements.js') }}"></script>
    {{-- Toggle --}}
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
@endsection
