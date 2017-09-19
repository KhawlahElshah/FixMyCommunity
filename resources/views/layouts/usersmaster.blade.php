
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">  
       <link href="/css/style.css" rel="stylesheet">
       <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
      
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       {{--  <script src="js/locationpicker.jquery.js"></script>  --}}

       <title>Fix my Community</title>

    
</head>
<body>
    
 @include('layouts.usersnav')



   @yield('content')
   
{{--  @include('layouts.footer')  --}}
{{--  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{asset('/js/index.js')}}"></script>  --}}

{{--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  --}}
{{--  <script src="{{asset('/js/index.js')}}"></script>   --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('/js/index.js')}}"></script> 

</body>
</html>
