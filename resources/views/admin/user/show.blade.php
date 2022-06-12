@extends('layouts.adminwindow')

@section('title', 'User Detail : '.$data->title)


@section('content')

<!--  MAIN CONTENT
      ***********************************************************************************************************************************************************  -->
<section class="wrapper site-min-height"> 
    <h3><i class="fa fa-angle-right">
    <a href="{{route('admin.user.destroy', ['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete Message</a></i></h3>
    <div class="col-md-12">
        <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i>Details User Data</h4>
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
                        <td style="width:150px">Email</td>
                        <td class="hidden-phone">{{$data->email}}</td>
                    </tr>
                    
                    <tr>
                        <td style="width:150px">Roles</td>
                        <td class="hidden-phone">
                                @foreach ($data->roles as $role)
                                    {{$role->name}}
                                    <a href="{{route('admin.user.destroyrole', ['uid'=>$data->id, 'rid'=>$role->id])}}" onclick="return confirm('Deleting!! Are you sure?')" >[x]</a>
                                @endforeach
                        </td>
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
                        <td style="width:150px">Add Role to User</td>
                        <td class="hidden-phone">
                            <form class="form-horizontal style-form" method="post" action="{{route('admin.user.addrole', ['id'=>$data->id])}}">
                                @csrf
                                <select name="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}"> {{$role->name}} </option>
                                @endforeach
                                </select>
                                <br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Role</button>
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