@extends('layouts.adminwindow')

@section('title', 'Show Reservation : '.$data->title)


@section('content')

<!--  MAIN CONTENT
      ***********************************************************************************************************************************************************  -->
<section class="wrapper site-min-height"> 
    <h3><i class="fa fa-angle-right">
    <a href="{{route('admin.message.destroy', ['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete Message</a></i></h3>
    <div class="col-md-12">
        <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i>Details Reservation Data</h4>
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
                        <td style="width:150px">User Id</td>
                        <td class="hidden-phone">{{$data->user_id}}</td>
                    </tr>

                    <tr>
                        <td style="width:150px">Package</td>
                        <td class="hidden-phone">{{$data->package_id}}</td>
                    </tr>

                    <tr>
                        <td style="width:150px">Start Date</td>
                        <td class="hidden-phone">{{$data->startdate}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Person</td>
                        <td class="hidden-phone">{{$data->person}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">price</td>
                        <td class="hidden-phone">{{$data->price}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Amount</td>
                        <td class="hidden-phone">{{$data->amount}}</td>
                    </tr>
                    <tr>
                        <td style="width:150px">Ip Number</td>
                        <td class="hidden-phone">{{$data->ip}}</td>
                    </tr>
                    <tr>
                        <td style="width:150px">Note</td>
                        <td class="hidden-phone">{{$data->note}}</td>
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
                                    <option>Accepted</option>
                                    <option>Refused</option>
                                </select>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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