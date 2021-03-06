<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @yield('style')
    {!! Html::style('css/bootstrap.css') !!}
</head>
<body>

    @yield('content')
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     
    {!! Html::script('js/bootstrap.js') !!} 
    @yield('script')
</body>
</html>