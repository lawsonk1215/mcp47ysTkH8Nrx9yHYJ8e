@extends("layouts.default")

@section("stylesheets")

<link rel="stylesheet" href="{{ asset('assets/css/colorbox.css') }}" />
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
            <h1>Gallery</h1>
          </div>

            <div class="row">
              <div class="col-xs-12">

                <div class="row">

                  {{ Form::open(['class' => 'col-sm-12']) }}

                      {{ Form::submit('Filter', ['class'=>'btn btn-sm pull-right btn-primary']) }}

                      <div class="col-md-4 pull-right">
                        {{ Form::select('people[]', $family, null, ['multiple' => '', 'class' => 'chosen-select', 'id' => 'form-field-select-4']) }}
                      </div>

                      <label class="col-md-2 pull-right text-right" for="form-field-select-4">Filter by people</label>

                  {{ Form::close() }}
                </div>

                <div class="space-20"></div>

                <div class="row clear">
                  <ul id="gallery-container" class="ace-thumbnails clearfix">

                    @foreach($pictures as $picture)
                    <li class="item">
                      <a href="/images/pictures/{{ $picture->id }}.jpg" data-rel="colorbox">
                        <img width="150" src="/images/pictures/{{ $picture->id }}.jpg" />
                        <div class="text">
                          <div class="inner">Sample Caption on Hover</div>
                        </div>
                      </a>

                      <div class="tools tools-bottom">

                        <a href="/gallery/{{ $picture->id }}/edit">
                          <i class="ace-icon fa fa-pencil"></i>
                        </a>

                      </div>
                    </li>
                    @endforeach
                    
                  </ul>
                </div>
              </div>
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

<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/masonry.min.js') }}"></script>

<script type="text/javascript">
jQuery(function($) {

  var $container = $('#gallery-container');

  imagesLoaded( $container, function() {
    $container.masonry({
      columnWidth: 90,
      itemSelector: '.item'
    });

  });
  // initialize
  

  var $overflow = '';
  var colorbox_params = {
    rel: 'colorbox',
    reposition:true,
    scalePhotos:true,
    scrolling:false,
    previous:'<i class="ace-icon fa fa-arrow-left"></i>',
    next:'<i class="ace-icon fa fa-arrow-right"></i>',
    close:'&times;',
    current:'{current} of {total}',
    maxWidth:'100%',
    maxHeight:'100%',
    onOpen:function(){
      $overflow = document.body.style.overflow;
      document.body.style.overflow = 'hidden';
    },
    onClosed:function(){
      document.body.style.overflow = $overflow;
    },
    onComplete:function(){
      $.colorbox.resize();
    }
  };

  $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
  $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange'></i>");

  $('.chosen-select').chosen({allow_single_deselect:true}); 

    $(window)
        .off('resize.chosen')
        .on('resize.chosen', function() {
            $('.chosen-select').each(function() {
                 var $this = $(this);
                 $this.next().css({'width': $this.parent().width()});
            })
        }).trigger('resize.chosen');

    $('#chosen-multiple-style').on('click', function(e){
        var target = $(e.target).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
         else $('#form-field-select-4').removeClass('tag-input-style');
    });
})
</script>

@stop
