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
                        <td style="width:150px">Package</td>
                        <td class="hidden-phone">{{$data->package->title}}</td>
                    </tr>

                    <tr>
                        <td style="width:150px">Name & Surname</td>
                        <td class="hidden-phone">{{$data->user->name}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Subject</td>
                        <td class="hidden-phone">{{$data->subject}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Comment</td>
                        <td class="hidden-phone">{{$data->comment}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Rate</td>
                        <td class="hidden-phone">{{$data->rate}}</td>
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
                            <form class="form-horizontal style-form" method="post" action="{{route('admin.comment.update', ['id'=>$data->id])}}">
                                @csrf
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Comment</button>
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