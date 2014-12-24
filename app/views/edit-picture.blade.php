@extends("layouts.default")

@section("stylesheets")

<link rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}" />

@stop

@section("content")

<body class="no-skin">
   
    @include('layouts.partials._navbar')     

    <div class="main-container" id="main-container">

        @include('layouts.partials._sidebar')

        <div class="main-content">

            <div class="page-content">

                <div class="page-content-area">

                    <div class="page-header">
                        <h1>
                            Edit Picture
                        </h1>
                    </div>

                    <div class="col-sm-4">
                        <img class="img-responsive" src="/images/pictures/{{ $picture->id }}.jpg">
                    </div>
                    <div class="col-sm-6">

                        @include('layouts.partials._errors')

                        @include('flash::message')

                        {{ Form::open() }}

                                <div>
                                    <label for="form-field-select-4">Who's in it?</label>

                                    <div class="space-2"></div>

                                    <select multiple="multiple" name="people[]" id="form-field-select-4" class="chosen-select">
                                        @foreach($family as $familyId => $familyName)
                                        <option value="{{ $familyId }}"
                                            @foreach($picture->people as $personId => $personName)
                                                @if ($personId === $familyId)
                                                    selected="selected"

                                                @endif
                                            @endforeach

                                        >{{ $familyName }}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>

                                <div class="space-20"></div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="description">Add a description?</label>
                                        <input name="description" type="text" class="form-control"/>
                                    </div>
                                </div>

                                <div class="space-20"></div>

                                {{ Form::submit('Update Picture', ['class'=>'btn btn-block btn-primary']) }}
                            {{ Form::close() }}

                            <div class="space-20"></div>

                            {{ Form::open() }}

                                {{ Form::submit('Delete Picture', ['class'=>'btn btn-block btn-danger']) }}

                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>


        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>

@stop

@section("scripts")

<script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>

<script type="text/javascript">
jQuery(function($)
{

    $('.chosen-select').chosen({allow_single_deselect:true}); 

    $(window)
        .off('resize.chosen')
        .on('resize.chosen', function() {
            $('.chosen-select').each(function() {
                 var $this = $(this);
                 $this.next().css({'width': $this.parent().width()});
            })
        }).trigger('resize.chosen');

    $('#input-file').ace_file_input({
        style:'well',
        btn_choose:'Drop files here or click to choose',
        btn_change:null,
        no_icon:'ace-icon fa fa-cloud-upload',
        droppable:true,
        thumbnail:'small'//large | fit
        //,icon_remove:null//set null, to hide remove/reset button
        /**,before_change:function(files, dropped) {
            //Check an example below
            //or examples/file-upload.html
            return true;
        }*/
        /**,before_remove : function() {
            return true;
        }*/
        ,
        preview_error : function(filename, error_code) {
            //name of the file that failed
            //error_code values
            //1 = 'FILE_LOAD_FAILED',
            //2 = 'IMAGE_LOAD_FAILED',
            //3 = 'THUMBNAIL_FAILED'
            //alert(error_code);
        }

    }).on('change', function(){
        //console.log($(this).data('ace_input_files'));
        //console.log($(this).data('ace_input_method'));
    });
    
            
            

    $('#chosen-multiple-style').on('click', function(e){
        var target = $(e.target).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
         else $('#form-field-select-4').removeClass('tag-input-style');
    });

});
</script>

@stop