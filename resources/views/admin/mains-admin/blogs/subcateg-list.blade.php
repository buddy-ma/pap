
 {{-- <ul class="dropdown-menu">
@foreach($category as $subcateg)
@if($subcateg->children()->count()==0) 
  <li value="{{$subcateg->id}}" ><a tabindex="-1" href="#">{{$subcateg->title}}</a></li>
@endif
  @if(count($subcateg->children)>0)
  <li class="dropdown-submenu">
    <a class="test" href="#">{{$subcateg->title}} <span
      class="caret"></span></a>
  @include('admin.mains-admin.blogs.subcateg-list',['category' => $subcateg->children])
  </li>
  @endif
@endforeach
</ul>  --}}

@foreach($subcategories as $subcategory)
{{$parent=$subcategory->parent->title}}
<?php $dash.="$parent"." >> "; ?>
<option value="{{$subcategory->id}}">{{$dash}}{{$subcategory->title}}</option>
    @if(count($subcategory->children)>0)
        @include('admin.mains-admin.blogs.subcateg-list',['subcategories' => $subcategory->children])
    @endif
    <?php $dash=" "; ?>
@endforeach  