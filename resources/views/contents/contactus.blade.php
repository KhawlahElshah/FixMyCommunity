

@extends('layouts.master')


@section('content')

 <div class="section">

 <h2 class="text-center mt-3"> للتواصل معنا </h2>
<hr>


 <form method="POST" action=""> 

<div class="half">
    
  
    <label for="name">الاسم</label>
    <input type="name" class="form-control " placeholder="أدخل البريد الإلكتروني">



    <label for="email">البريد الإلكتروني</label>
    <input type="email" class="form-control " placeholder="أدخل البريد الإلكتروني">


    
    <label for="phonenumber">رقم الهاتف</label>
    <input type="number" class="form-control" placeholder="أدخل رقم الهاتف">

     <textarea name="" id="" cols="70" rows="4" class="mt-3"></textarea>

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