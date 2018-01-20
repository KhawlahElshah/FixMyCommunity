
@extends('layouts.master')


@section ('content')



{{--  jumbtron of the home page  --}}

<div class="jumbotron text-center">
  <h2 class="display-5">بلغ عن مشكلة في الطريق أو حادث</h2>
  <hr class="my-4">
  <p class="lead ">
    
    <a class="btn btn-lg activebutton" href="#report"> أضف بلاغ</a>
  </p>
</div>
<div  class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> 



 
<a id="report">
@include('reports.create')
</a>



@endsection


  