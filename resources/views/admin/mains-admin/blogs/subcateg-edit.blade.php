@foreach($subcategories as $subcategory)
{{$parent=$subcategory->parent->title}}
<?php $dash.="$parent"." >> "; ?>
{{-- <option value="{{ $catg }}">catgs {{ $catg }}</option> --}}
<option value="{{$subcategory->id}}" {{ $catgs->contains('id', $subcategory->id) ? 'selected' : '' }} >{{$dash}}  {{$subcategory->title}}</option>
    @if(count($subcategory->children)>0)
        @include('admin.mains-admin.blogs.subcateg-edit',['subcategories' => $subcategory->children ])
    @endif
    <?php $dash=" "; ?>
@endforeach 