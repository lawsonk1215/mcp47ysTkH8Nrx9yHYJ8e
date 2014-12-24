<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Merry Christmas</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />

    @yield('stylesheets')

    <link rel="stylesheet" href="{{ asset('assets/css/ace-fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" />

    <!--[if lte IE 9]>
        <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" />
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}" />
    <![endif]-->

    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->


</head>
 
    @yield('content')


    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='{{ asset('assets/js/jquery.min.js') }}'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('js/jquery1x.min.js') }}'>"+"<"+"/script>");
    </script>
    <![endif]-->

    <script type="text/javascript">

        if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");

    </script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.colorbox-min.js') }}"></script>

    <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace.min.js') }}"></script>

    <!-- page specific plugin scripts -->
    @yield('scripts')
    </body>
</html>