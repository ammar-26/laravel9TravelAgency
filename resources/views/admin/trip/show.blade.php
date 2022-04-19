@extends('layouts.adminbase')

@section('title', 'Show trip : '.$trip->title)


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"><a href="{{route('admin.trip.edit', ['id'=>$trip->id])}}" class="btn btn-theme">Edit Trip</a>
            <a href="{{route('admin.trip.destroy', ['id'=>$trip->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete trip</a></i></h3>
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>Details Data</h4>
                    <hr><table class="table table-striped table-advance table-hover">    
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn "></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:150px">Id</td>
                                <td class="hidden-phone">{{$trip->id}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Title</td>
                                <td class="hidden-phone">{{$trip->title}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">From</td>
                                <td class="hidden-phone">{{$trip->from}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">To</td>
                                <td class="hidden-phone">{{$trip->to}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Duration</td>
                                <td class="hidden-phone">{{$trip->duration}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Description</td>
                                <td class="hidden-phone">{{$trip->description}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Image</td>
                                <td class="hidden-phone">{{$trip->image}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Created Date</td>
                                <td class="hidden-phone">{{$trip->created_at}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Updated Date</td>
                                <td class="hidden-phone">{{$trip->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div>
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->



@endsection 