
@extends('adminlte::page')
@section('content')
<div class="box-body">

    <div class='box box-info'>


        <div class='box-header'>
<div class="pull-right box-tools">
                 <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
                                            
                <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                       
                 </div><!-- /. tools -->
                     </div><!-- /.box-header -->





                <div class='box-body pad'>


                                                    <div class="box-header">
                                    <h3 class="box-title">News</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Post Title</label>
                                            <input type="text" class="form-control" id="post-title" placeholder="Title">
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Supported file are: PNG, JPG,JPEG</p>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Check me out
                                            </label>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <form>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                    </textarea>                        
             </form>
                                </div>
                            </div>





                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->



       
    

</div>
@endsection
@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection
<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>





















