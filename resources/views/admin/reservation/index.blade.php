@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')


@section('content')



MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
        <i class="fa fa-angle-right"></i>
        <div class="row mt">
            <div class="col-lg-12">
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>Comment Lists</h4>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th style = "width: 25px">id</th>
                            <th>Package</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style = "width: 40px">show</th>
                            <th style = "width: 40px">delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('admin.package.show', ['id'=>$rs->package_id])}}"> {{$rs->package->title}} </a></td>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->comment}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                                <a class="btn btn-round btn-warning" href="{{route('admin.comment.show', ['id'=>$rs->id])}}"
                                onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                    Show
                                </a>
                            </td>
                            <td><a href="{{route('admin.comment.destroy', ['id'=>$rs->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-round btn-danger">Delete</a></td>
                            
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- --/content-panel ---->
            </div>
            </div>
        </div>
        
    </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection 