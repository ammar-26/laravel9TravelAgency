@extends('layouts.adminbase')

@section('title', 'Edit Category')


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"></i>Edit {{$category->title}}</h3>
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Category Elements</h4>
                    
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.category.update', ['id'=>$category->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{$category->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" name="keywords" class="form-control" value="{{$category->keywords}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" value="{{$category->description}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <select type="text" name="status" class="col-sm-2 col-sm-2 control-label" value="{{$category->status}}">
                                <option>Active</option>
                                <option>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group" style="padding: 10px">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding: 1px">Image</label>
                            <div>
                                <input type="file" name="image" >
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>

                    </form>
                </div>
            </div>
            
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->



@endsection 