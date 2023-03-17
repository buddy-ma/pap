@extends('admin.layouts.master')
@section('css')
    <!--INTERNAL Select2 css -->
    <link href="{{ URL::asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="row flex-lg-nowrap mt-5">
        <div class="col-12">
            @if (Session::get('success'))
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>{{ Session::get('success') }}
                </div>
            @endif
            <div class="row flex-lg-nowrap">
                <div class="col-12 mb-3">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h3 class="card-title">Blog List</h3>
                            @can('blog-create')
                                <a href="{{ route('show-blog-add') }}" class="btn btn-primary float-right ml-auto">
                                    <i class="fe fe-plus mr-2"></i> Add Blog
                                </a>
                            @endcan
                        </div>
                        <div class="card-body">

                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table
                                        class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap"
                                        id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">Blog Title</th>
                                                <th class="wd-15p border-bottom-0">Categorie</th>
                                                <th class="wd-15p border-bottom-0">Blogger</th>
                                                {{-- <th class="wd-15p border-bottom-0">Visits</th> --}}
                                                <th class="wd-15p border-bottom-0">Date Creation</th>
                                                <th class="wd-15p border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="change-user">
                                            @foreach ($blogs as $blog)
                                                <tr>
                                                    <td>{{ $blog->title }}</td>
                                                    <td>
                                                        @if (!empty($blog->categories()))
                                                            @foreach ($blog->categories()->get() as $categ)
                                                                <label
                                                                    class="badge badge-success">{{ $categ->title }}</label>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>{{ $blog->user->firstname }} {{ $blog->user->lastname }}</td>
                                                    {{-- <td>{{ visits($blog)->count() }}</td> --}}
                                                    <td>{{ $blog->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('blog-delete', [$blog->id]) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            @can('blog-edit')
                                                                <a href="{{ route('show-blog-update', [$blog->id]) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="fe fe-edit"></i>
                                                                </a>
                                                                <a href="{{ route('show-blog-show', [$blog->id]) }}"
                                                                    class="btn btn-success {{ $blog->ismodified && $blog->status == 0 ? 'flash' : '' }}">
                                                                    <i class="fe fe-eye"></i>
                                                                </a>
                                                            @endcan
                                                            @can('blog-delete')
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fe fe-trash"></i>
                                                                </button>
                                                            @endcan
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
