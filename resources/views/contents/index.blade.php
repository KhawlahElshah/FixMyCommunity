
@extends('layouts.master')


@section ('content')


{{--  jumbtron of the home page  --}}

<div class="jumbotron text-center">
  <h1 class="display-5">بلغ عن مشكلة أو حادث</h1>
  <hr class="my-4">
  <p class="lead ">
    
    <a class="btn btn-lg activebutton" href="#report"> أضف بلاغ</a>
  </p>
</div>


 <h1 class="text-center"> بلغِ </h1>

 
<a id="report">
@include('reports.create')
</a>



@endsection


  