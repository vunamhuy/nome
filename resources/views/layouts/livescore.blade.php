<html>
<head>
    <title>Livescore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('head')
    @include('includes.header_css')
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="100">

<div id="wrapper">
    @section('nav')
        @include('elements.side_bar_live')
    @show

    @yield('content')

</div>
    @include('includes.footer_scripts')
    @yield('script')
    @yield('angular_script')
</body>
</html>