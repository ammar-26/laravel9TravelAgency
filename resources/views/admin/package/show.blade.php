@extends('layouts.adminbase')

@section('title', 'Show Package : '.$data->title)


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"><a href="{{route('admin.package.edit', ['id'=>$data->id])}}" class="btn btn-theme">Edit Pacakge</a>
            <a href="{{route('admin.package.destroy', ['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete Pacakge</a></i></h3>
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>Details Data</h4>
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
                                <td style="width:150px">Category</td>
                                <td class="hidden-phone">
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Title</td>
                                <td class="hidden-phone">{{$data->title}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Keywords</td>
                                <td class="hidden-phone">{{$data->keywords}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Description</td>
                                <td class="hidden-phone">{{$data->description}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Detail</td>
                                <td class="hidden-phone">{{$data->detail}}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Price</td>
                                <td class="hidden-phone">{{$data->price}}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Passenger</td>
                                <td class="hidden-phone">{{$data->passenger}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Status</td>
                                <td class="hidden-phone">{{$data->status}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Image</td>
                                <td class="hidden-phone">
                                    @if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                    @endif
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
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div>
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->



@endsection 