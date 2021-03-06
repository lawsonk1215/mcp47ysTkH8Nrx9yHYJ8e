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

                        {{ Form::model($picture, ['route' => ['edit_picture_path', $picture->id]]) }}

                                <div>
                                    <label for="form-field-select-4">Who's in it?</label>

                                    <div class="space-2"></div>

                                    {{ Form::select('people[]', $family, $picture->people->lists('person_id'), ['multiple' => '', 'class' => 'chosen-select', 'id' => 'form-field-select-4']) }}
                                </div>

                                <div class="space-20"></div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="description">Add a description?</label>
                                        <input name="description" type="text" class="form-control" value="{{ $picture->description }}"/>
                                    </div>
                                </div>

                                <div class="space-20"></div>

                                {{ Form::submit('Update Picture', ['class'=>'btn btn-block btn-primary']) }}
                            {{ Form::close() }}

                            <div class="space-20"></div>

                            {{ Form::model($picture, ['route' => ['delete_picture_path', $picture->id]]) }}

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

});
</script>

@stop