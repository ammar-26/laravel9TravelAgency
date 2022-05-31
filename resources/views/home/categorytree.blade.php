@foreach ($children as $subcategory)
    <ul class="sub-menu">
        @if ( count($subcategory->children)) 
            <li> {{$subcategory->title}} </li>
            <lu class="sub-menu">
            @include('home.categorytree',['children' => $subcategory->children])
            </lu>
            <hr>
        @else
            <li><a href="{{route('categorypackages' ,['id'=>$subcategory->id, 'slug' => $subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach