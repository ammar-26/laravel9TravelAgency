@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https:://cdn/jsdeliver.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->


@endsection


@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Settings</h3>
        <div class="col-lg-12">




        <form class="form-horizontal style-form" method="post" action="{{route('admin.setting.update')}}" enctype="multipart/form-data">
            @csrf
            <section class="content">    
                <div class="form-panel">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#general">General</a></li>
                        <li><a data-toggle="tab" href="#smtpemail">Smtp Email</a></li>
                        <li><a data-toggle="tab" href="#socialmedia">Social Media</a></li>
                        <li><a data-toggle="tab" href="#aboutus">About us</a></li>
                        <li><a data-toggle="tab" href="#contact">Contact Page</a></li>
                        <li><a data-toggle="tab" href="#references">References</a></li>
                    </ul>

                    <br>
                    <br>
                    
                    <div class="tab-content">
                        <div id="general" class="tab-pane fade in active">
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
                                        <input type="text" name="company" class="form-control" value="{{$data->company}}">
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


                        <div id="smtpemail" class="tab-pane fade">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Smtp Server</label>
                                <div class="col-sm-10">
                                    <input type="text" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Smtp Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="smtpmail" class="form-control" value="{{$data->smtpmail}}">
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


                        <div id="socialmedia" class="tab-pane fade">
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


                        <div id="aboutus" class="tab-pane fade">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">About Us</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="aboutus" name="aboutus">{!! $data->aboutus !!}</textarea>
                                </div>
                            </div>
                        </div>



                        <div id="contact" class="tab-pane fade">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="contact" name="contact">{!! $data->contact !!}</textarea>
                                </div>
                            </div>
                        </div>


                        <div id="references" class="tab-pane fade">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">References</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="detail" name="references">
                                        {!! $data->references !!}
                                    </textarea>
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
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
            </section>            

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection
@section('foot')
    <!-- <script src="https:://cdn.jsdeliver.net/npm/summernote@0.8.18/dist/summernot.min.js"></script>

    <script>
        $(function() {
            //summernote
            $('.textarea').summernote()
        })
    </script> -->

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('.references').summernote({
        });
    </script>

@endsection
