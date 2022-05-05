@extends('layouts.adminbase')

@section('title', 'Package List')


@section('content')



MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
        <i class="fa fa-angle-right"></i>
        <a href="{{route('admin.package.create')}}" class="btn btn-theme">Add Package</a>
        <div class="row mt">
            <div class="col-lg-12">
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>Package Lists</h4>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th style = "width: 25px">id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th style = "width: 40px">edit</th>
                            <th style = "width: 40px">delete</th>
                            <th style = "width: 40px">show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.image.index', ['pid'=>$rs->id])}}"
                                onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                <img src="{{asset('assets')}}/admin/img/gallery.png" style="height: 40px">
                                </a>
                            </td>
                            <td><a href="{{route('admin.package.edit', ['id'=>$rs->id])}}" class="btn btn-round btn-info">Edit</a></td>
                            <td><a href="{{route('admin.package.destroy', ['id'=>$rs->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-round btn-danger">Delete</a></td>
                            <td><a href="{{route('admin.package.show', ['id'=>$rs->id])}}" class="btn btn-round btn-warning">Show</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- --/content-panel ---->
            </div>
            </div>
        </div>
        
    </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection 