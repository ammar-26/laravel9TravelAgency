@extends('layouts.adminbase')

@section('title', 'Add Trip')


@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Trip</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Add Trip</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


    <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Trip Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/admin/trip/store">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">from</label>
                            <input type="text" class="form-control" name="from" placeholder="from">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">to</label>
                            <input type="text" class="form-control" name="to" placeholder="to">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">duration</label>
                            <input type="text" class="form-control" name="duration" placeholder="duration">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>


    <!-- Default box -->
<!--
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        Start creating your amazing application!
        </div>
        <!-- /.card-body -->
<!--        <div class="card-footer">
        Footer
        </div>
        <!-- /.card-footer-->
<!--    </div>
    <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection 