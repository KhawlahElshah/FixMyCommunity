
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">  
       <link href="/css/style.css" rel="stylesheet">
       <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
      
      
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       {{--  <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>  --}}
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       {{--  <script src="js/locationpicker.jquery.js"></script>  --}}

       <title>أصلح مجتمعي</title>
</head>
<body>
    
 @include('layouts.nav')



   @yield('content')
@include('layouts.footer')
{{--  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{asset('/js/index.js')}}"></script>  --}}

{{--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  --}}
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWoDqiKQt97gB7Li1-dy627nSMx0Q5RSg&callback=initMap">
    </script>
<script src="{{asset('/js/index.js')}}"></script> 


</body>
</html>
