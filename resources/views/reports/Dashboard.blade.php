

@if(Auth::user()->email=='k.tawfik@hc.ly')

@include('settings.super')

@else
@include('settings.default')
@endif