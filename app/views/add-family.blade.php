@extends("layouts.default")

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
                            Add Family
                        </h1>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">

                            @include('layouts.partials._errors')

                            @include('flash::message')

                            <div>

                                {{ Form::open() }}

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="name">What's his/her name?</label>
                                            <input name="name" type="text" class="form-control" required/>
                                        </div>
                                    </div>

                                    <div class="space-20"></div>

                                    {{ Form::submit('Add Family Member', ['class'=>'btn btn-block btn-primary']) }}

                                {{ Form::close() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-inner">

                <div class="footer-content">
                    <span class="bigger-120">
                        <span class="blue bolder">Winshaw</span>
                        Matrix &copy; 2013-2014
                    </span>
                    
                </div>

            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>

@stop