@extends('layouts.adminbase')

@section('title', 'Edit Category : '.$data->title)


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"></i>Edit {{$data->title}}</h3>
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Category Elements</h4>
                    
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.category.update', ['id'=>$data->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Parent Category</label>
                            
                            <select class="col-sm-2 col-sm-2 control-label" name="parent_id">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{$data->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" value="{{$data->description}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <select type="text" name="status" class="col-sm-2 col-sm-2 control-label" value="{{$data->status}}">
                                <option>Available</option>
                                <option>Unavailable</option>
                            </select>
                        </div>
                        <div class="form-group" style="padding: 10px">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding: 1px">Image</label>
                            <div>
                                <input type="file" name="image" value="{{$data->image}}">
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