@extends('layouts.adminbase')

@section('title', 'Edit Trip')


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"></i>Edit {{$trip->title}}</h3>
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Trip Elements</h4>
                    
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.trip.update', ['id'=>$trip->id])}}">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{$trip->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">From</label>
                            <div class="col-sm-10">
                                <input type="text" name="from" class="form-control" value="{{$trip->from}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">To</label>
                            <div class="col-sm-10">
                                <input type="text" name="to" class="form-control" value="{{$trip->to}}">
                                <!-- <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
    -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Duration</label>
                            <div class="col-sm-10">
                                <input type="text" name="duration" class="form-control" value="{{$trip->duration}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" value="{{$trip->description}}">
                            </div>
                        </div>
                        
                        <div class="form-group" style="padding: 10px">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding: 1px">Image</label>
                            <div>
                                <input type="file" name="file" >
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