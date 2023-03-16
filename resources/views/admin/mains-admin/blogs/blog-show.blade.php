@extends('admin.layouts.master')
@section('css')
    <!-- INTERNAL File Uploads css -->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="{{ URL::asset('assets/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!--INTERNAL Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- INTERNAL Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">


@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Update Blog</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="fe fe-layout  mr-2 fs-14"></i>Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">Update Blog</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Blog </h3>
                </div>
                <div class="card-body pb-2">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert"><button type="button" class="close"
                                data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>{{ $message }}.
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @can('user-edit')
                    <form action="{{ route('blog-update', [$blog->id]) }}" method='POST' role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <input id="user_id" type="hidden" value="{{ $blog->id }}">
                    @endcan
                <div class="row">
                    <div class="col-lg">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value='{{ old('title') ?? $blog->title }}'/>
                    </div> 
                    
                    <div class="col-lg">
                        <label>Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" value='{{ old('subtitle') ?? $blog->subtitle }}'/>
                    </div>

                    <div class="col-lg">
                        <label>Authors</label>
                        <select 
                        onchange="console.log($(this).children(':selected').length)"
                        class="search-box" name="authors">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}"
                                {{ $autrs->contains('name', $author->name) ? 'selected' : '' }}>
                                {{ $author->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    
                    <div class="col-lg">
                        <label>Languages</label>
                        <select 
                        onchange="console.log($(this).children(':selected').length)"
                        class="search-box" name="languages">
                        @foreach ($languages as $language)
                            <option value="{{ $language->id }}"
                                {{ $langs->contains('name', $language->name) ? 'selected' : '' }}>
                                {{ $language->name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label>Categories</label>
                        <select multiple="multiple" name="categories[]" class="search-box">
                            @isset($categories)
                            <?php $dash=''; ?>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{ $catgs->contains('id', $category->id) ? 'selected' : '' }} >{{$category->title}}</option>
                                    @if(count($category->children)>0)
                                        @include('admin.mains-admin.blogs.subcateg-edit',['subcategories' => $category->children ])
                                    @endif
                                @endforeach 
                            @endisset
                        </select>
                    </div>
                </div> 

                    <div class="col-lg">
                        <label>Image</label>
                        <input type="file" class="dropify" data-height="180" name="image" data-default-file="{{URL::asset('images/'.$blog->image)}}" />
                    </div> 
                    
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea name="editor1" rows="1000" style="min-height: 900px;" >{!!$blog->text!!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Enter Your Tags here :</label>
                        <input value="{{$tags}}" name="tags" type="text" class="form-control" data-role="tagsinput" data-cls-tag-title="text-bold fg-white"/>
                    </div>

                        @can('user-edit')
                            <div class="btn-list text-right">
                                <input type="submit" value="Save" name="action" class="btn btn-primary">
                            </div>
                        @endcan
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- INTERNAL Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- INTERNAL File uploads js -->
    <script src="{{ URL::asset('assets/plugins/fileupload/js/dropify.js') }}"></script>
    <script src="{{ URL::asset('assets/js/filupload.js') }}"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="{{ URL::asset('assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/file-upload.js') }}"></script>

    <script type="text/javascript">
        CKEDITOR.config.height = 1000;
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{route('blog-add', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
@endsection