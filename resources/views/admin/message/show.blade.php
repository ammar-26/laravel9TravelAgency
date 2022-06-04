@extends('layouts.adminwindow')

@section('title', 'Show Message : '.$data->title)


@section('content')

<!--  MAIN CONTENT
      ***********************************************************************************************************************************************************  -->
<section class="wrapper site-min-height"> 
    <h3><i class="fa fa-angle-right">
    <a href="{{route('admin.message.destroy', ['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete Message</a></i></h3>
    <div class="col-md-12">
        <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i>Details Message Data</h4>
            <hr><table class="table table-scategoryed table-advance table-hover">    
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn "></i></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td style="width:150px">Id</td>
                        <td class="hidden-phone">{{$data->id}}</td>
                    </tr>

                    <tr>
                        <td style="width:150px">Name & Surname</td>
                        <td class="hidden-phone">{{$data->name}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Phone Number</td>
                        <td class="hidden-phone">{{$data->phone}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Email</td>
                        <td class="hidden-phone">{{$data->email}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Message</td>
                        <td class="hidden-phone">{{$data->Message}}</td>
                    </tr>
                    <tr>
                        <td style="width:150px">Ip Number</td>
                        <td class="hidden-phone">{{$data->ip}}</td>
                    </tr>
                    <tr>
                        <td style="width:150px">Status</td>
                        <td class="hidden-phone">{{$data->status}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Created Date</td>
                        <td class="hidden-phone">{{$data->created_at}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Updated Date</td>
                        <td class="hidden-phone">{{$data->updated_at}}</td>
                    </tr>
                
                    <tr>
                        <td style="width:150px">Admin Note</td>
                        <td class="hidden-phone">
                            <form class="form-horizontal style-form" method="post" action="{{route('admin.message.update', ['id'=>$data->id])}}">
                                @csrf
                                <textarea class="form-control" id="note" name="note">
                                    {{$data->note}}
                                </textarea>
                                <br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Note</button>
                                </div>
                            </form>
                        </td>
                    </tr>
            
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div>
</section><!--/wrapper -->

    <!--main content end-->



@endsection 