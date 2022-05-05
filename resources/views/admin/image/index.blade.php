@extends('layouts.adminwindow')

@section('title', 'Package Image Gallery')

@section('content')


<div class="col-lg-12">
    <div class="form-panel">
        <h2>{{$package->title}}</h2>
        <form class="form-horizontal style-form" method="post" action="{{route('admin.image.store',['pid'=>$package->id])}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" placeholder="title">
                </div>
            </div>
            
            <div class="form-group" style="padding: 10px">
                <label class="col-sm-2 col-sm-2 control-label" style="padding: 1px">Image</label>
                <div>
                    <input type="file" name="image" >
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>

<!--main content start-->
<div class="col-lg-12">
    <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i>Package Image List</h4>
        <hr>
        <table class="table">
            <thead>
            <tr>
                <th style = "width: 25px">id</th>
                <th>title</th>
                <th>image</th>
                <th style = "width: 40px">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $rs)
            <tr>
                <td>{{$rs->id}}</td>
                <td>{{$rs->title}}</td>
                <td>
                    @if ($rs->image)
                        <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                    @endif
                </td>
                <td><a href="{{route('admin.image.destroy', ['pid'=>$package->id, 'id'=>$rs->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-round btn-danger">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- --/content-panel ---->
</div>        

    <!--main content end-->

@endsection
