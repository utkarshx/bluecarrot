<!DOCTYPE html>
<html lang="en">
<head>
    @section('metatags')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @show
    <title>Kids SchoolBank Champs @yield('title')</title>

    @section('stylesheets')
        <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    @show
</head>
<body>

@yield('maincontent')

@section('scripts')
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@show
@yield('modals')
</body>
</html>