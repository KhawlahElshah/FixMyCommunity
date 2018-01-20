

@extends('layouts.master')



@section('content')


<div  class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> 
  
 <h2 class="text-center mt-3"> للتواصل معنا </h2>
<hr>

 <div class="createsection">

 <form method="POST" action="/contact"> 
{{csrf_field()}}
<div class="half">
    
  
    <label for="name">الاسم</label>
    <input type="text" name="sendername" class="form-control " placeholder="أدخل اسمك ">



    <label for="email">البريد الإلكتروني</label>
    <input type="email" name="senderemail" class="form-control " placeholder="أدخل البريد الإلكتروني">


    
    <label for="phonenumber">رقم الهاتف</label>
    <input type="text" name="senderphone" class="form-control" placeholder="أدخل رقم الهاتف">

     <textarea name="sendermail" id="" cols="70" rows="4" class="mt-3"></textarea>

<br>
    <button type="submit" class="btn btn-lg activebutton">إضافة</button>

      
</div>
</form>

<div class="half ">

<h4 class="text-center mb-3">
للمزيد من المعلومات لاتترددوا بالإتصال بنا على:
<br>
من الساعة 9 صباحاً إلى 4 مساءً.
</h4>

<p>
<i class="fa fa-phone fa-3x" aria-hidden="true"></i> +2189124677563
</p>

<p>
<i class="fa fa-envelope fa-3x" aria-hidden="true"></i> info@hc.ly 
</p>
</div>




</div>
  @endsection