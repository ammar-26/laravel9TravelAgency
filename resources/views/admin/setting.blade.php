@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https:://cdn/jsdeliver.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Settings</h3>
        <div class="col-lg-12">










        <!-- <div class="form-panel">      -->

            <form class="form-horizontal style-form" method="post" action="{{route('admin.setting.update')}}" enctype="multipart/form-data">
                @csrf
        
                                    
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="/admin/setting" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-smtpemail-tab" data-toggle="pill" href="#custom-tabs-one-smtpemail" role="tab" aria-controls="custom-tabs-one-smtpemail" aria-selected="false">Smtp Email</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-socialmedia-tab" data-toggle="pill" href="#custom-tabs-one-socialmedia" role="tab" aria-controls="custom-tabs-one-socialmedia" aria-selected="false">Social Media</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                        </li>
                                    </ul>
                                </div>





                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                                    <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
                                                    <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="title" class="form-control" value="{{$data->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="description" class="form-control" value="{{$data->description}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Company</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="Company" class="form-control" value="{{$data->company}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="address" class="form-control" value="{{$data->address}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Phone</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="email" class="form-control" value="{{$data->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                                        <select type="text" name="status" class="col-sm-2 col-sm-2 control-label" value="{{$data->status}}">
                                                            <option>Available</option>
                                                            <option>Unavailable</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="padding: 10px">
                                                        <label class="col-sm-2 col-sm-2 control-label" style="padding: 1px">Icon</label>
                                                        <div>
                                                            <input type="file" name="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-smtpmail" role="tabpanel" aria-labelledby="custom-tabs-one-smtpmail-tab">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Smtp Server</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Smtp Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="smtpemail" class="form-control" value="{{$data->smtpemail}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Smtp Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Smtp Port</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="smtpport" class="form-control" value="{{$data->smtpport}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-socialmedia" role="tabpanel" aria-labelledby="custom-tabs-one-socialmedia-tab">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Fax</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="fax" class="form-control" value="{{$data->fax}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Facebook</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Instagram</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Twitter</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">YouTube</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="youtube" class="form-control" value="{{$data->youtube}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-aboutus" role="tabpanel" aria-labelledby="custom-tabs-one-aboutus-tab">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">About Us</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="aboutus" class="form-control" value="{{$data->aboutus}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="contact" class="form-control" value="{{$data->contact}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">References</label>
                                                        <div class="col-sm-10">
                                                        <textarea class="form-control" id="detail" name="detail">{{$data->references}}</textarea>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#detail'))
                                                            .then(editor=>{
                                                                console.log(editor);
                                                            })
                                                            .catch(error=>{
                                                                console.error(error);
                                                            });
                                                    </script>
                                                </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Data</button>
                                            </div>

                                        <!-- /.card -->
                                    </div>
                                </div>
                
                            </div>
            </form>
        <!-- </div> -->
        
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection
@section('foot')
    <script src="https:://cdn.jsdeliver.net/npm/summernote@0.8.18/dist/summernot.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        });
    </script>
@endsection