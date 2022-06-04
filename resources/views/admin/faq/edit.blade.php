@extends('layouts.adminbase')

@section('title', 'Edit FAQ : '.$data->title)

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
            <h3><i class="fa fa-angle-right"></i>Edit FAQ: {{$data->title}}</h3>
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> FAQ Elements</h4>
                    
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.faq.update', ['id'=>$data->id])}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Questioin</label>
                            <div class="col-sm-10">
                                <input type="text" name="question" class="form-control" value="{{$data->question}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Answer</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="answer" name="answer">
                                    {!! $data->answer !!}
                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#answer'))
                                        .then(editor=>{
                                            console.log(editor);
                                        })
                                        .catch(error=>{
                                            console.error(error);
                                        });
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <select type="text" name="status" class="col-sm-2 col-sm-2 control-label" value="{{$data->status}}">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>

                    </form>
                </div>
            </div>
            
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection 
@section('foot')
    <script src="https:://cdn.jsdeliver.net/npm/summernote@0.8.18/dist/summernot.min.js"></script>

    <script>
        $(function() {
            //summernote
            $('.textarea').summernote()
        })
    </script>
@endsection

