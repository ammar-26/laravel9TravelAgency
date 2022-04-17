@extends('layouts.adminbase')

@section('title', 'Trip List')


@section('content')



MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Trip list</h3>
        <div class="row mt">
            <div class="col-lg-12">
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i> Trip Lists</h4>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th style = "width: 25px">id</th>
                            <th>from</th>
                            <th>to</th>
                            <th>duration</th>
                            <th>description</th>
                            <th>image</th>
                            <th style = "width: 40px">edit</th>
                            <th style = "width: 40px">delete</th>
                            <th style = "width: 40px">show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trip as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->from}}</td>
                            <td>{{$rs->to}}</td>
                            <td>{{$rs->duration}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            <td><a href="/admin/trip/edit/{{$rs->id}}" class="btn btn-round btn-info">Edit</a></td>
                            <td><a href="/admin/trip/delete/{{$rs->id}}" class="btn btn-round btn-danger">Delete</a></td>
                            <td><a href="/admin/trip/show/{{$rs->id}}" class="btn btn-round btn-warning">Show</a></td>
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