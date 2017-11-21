<html>
<head>
    <title>User Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('head')
    @include('includes.header_css')
</head>
<body>

<div id="wrapper">
    @section('nav')
        @include('includes.nav')
    @show

    @yield('content')

</div>
    @include('includes.footer_scripts')
    @yield('script')
</body>
</html>