@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')



MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
        <i class="fa fa-angle-right"></i>
        <a href="{{route('admin.faq.create')}}" class="btn btn-theme">Add Question</a>
        <div class="row mt">
            <div class="col-lg-12">
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>FAQ Lists</h4>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th style = "width: 25px">id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th style = "width: 40px">edit</th>
                            <th style = "width: 40px">delete</th>
                            <th style = "width: 40px">show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->question}}</td>
                            <td>{!! $rs->answer !!}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.faq.edit', ['id'=>$rs->id])}}" class="btn btn-round btn-info">Edit</a></td>
                            <td><a href="{{route('admin.faq.destroy', ['id'=>$rs->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-round btn-danger">Delete</a></td>
                            <td><a href="{{route('admin.faq.show', ['id'=>$rs->id])}}" class="btn btn-round btn-warning">Show</a></td>
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