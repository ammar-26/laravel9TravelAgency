@extends('layouts.adminbase')

@section('title', 'Add FAQ')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height"> 
            <h3><i class="fa fa-angle-right"></i>Add FAQ</h3>
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> FAQ Elements</h4>
                    
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.faq.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Question</label>
                            <div class="col-sm-10">
                                <input type="text" name="question" class="form-control" placeholder="question">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Answer</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="answer" name="answer">

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
                            <select class="col-sm-2 col-sm-2 control-label" name="status" >
                                <option>---select---</option>
                                <option value="Available">True</option>
                                <option value="Unavailable">False</option>
                            </select>
                        </div>
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
            
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->



@endsection 