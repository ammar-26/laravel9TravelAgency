@extends('layouts.adminbase')

@section('title', 'Show Category : '.$category->title)


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"><a href="{{route('admin.category.edit', ['id'=>$category->id])}}" class="btn btn-theme">Edit Category</a>
            <a href="{{route('admin.category.destroy', ['id'=>$category->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete Category</a></i></h3>
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
                                <td class="hidden-phone">{{$category->id}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Title</td>
                                <td class="hidden-phone">{{$category->title}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Keywords</td>
                                <td class="hidden-phone">{{$category->keywords}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Description</td>
                                <td class="hidden-phone">{{$category->description}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Status</td>
                                <td class="hidden-phone">{{$category->status}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Image</td>
                                <td class="hidden-phone">{{$category->image}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Created Date</td>
                                <td class="hidden-phone">{{$category->created_at}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:150px">Updated Date</td>
                                <td class="hidden-phone">{{$category->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div>
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->



@endsection 