@extends('layouts.usersmaster')


@section('content')


 <link rel="stylesheet" href="https://.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">

<div class="col-3 float-right">
  <h2>إعدادات</h2>
  
  <ul class="nav flex-column nav-tabs navsettings">
    <li class="active navbutton"><a href="#types">أنواع البلاغات</a></li>
    <li><a href="#users" >المستخدمين</a></li>
    <li><a href="#councils">البلديات</a></li>
    <li><a href="#states">حالات البلاغ</a></li>
  </ul>
</div>


 
  <div class="tab-content col-12 text-center float-right">

    <div id="types" class="tab-pane fade in active mt-5">
      <h2 class="mb-5">أنواع البلاغات</h2>
      <p>

<form method="POST" action="/dashboard/type">
 {{ csrf_field() }}
 <label for="name">إضافة نوع بلاغ جديد</label>
  <input type="text"   name="name">
 <button type="submit" class="btn btn-lg activebutton">إضافة</button>
</form>

<table class="table-dark table-hover table-bordered w-100 settingstable" id="typestable">
    @foreach($types as $type)
        <tr class="typerow">
        <td>{{$type->id}} </td>
        <td class="typename" id="typename"> {{$type->name}}</td>
        
        <td ><button type="submit" class="fa fa-pencil border-0 bg-light "  data-toggle="modal" data-target="#typeupdatemodel"></button>
        
        </td>
        
          @include('typeupdate')
        
        </tr>
       
    @endforeach
  
</table>

</p>
 </div>


 <div id="users" class="tab-pane fade">
      <h2 class="mb-5">المستخدمين</h2>
      <p>

 <label for="user">إضافة مستخدم جديد</label>

 <button type="submit" class="btn btn-lg activebutton" data-toggle="modal" data-target="#exampleModal">إضافة</button>
@include('signup')
<table class="table-dark table-hover table-bordered w-100 settingstable" id="userstable">
    @foreach($users as $user)
        <tr class="userrow">
        <td>{{$user->id}} </td>
        <td> {{$user->name}}</td>
        <td> {{$user->email}}</td>
        
        <td ><button type="submit" class="fa fa-pencil border-0 bg-light"  data-toggle="modal" data-target="#updatemodeluser"></button> </td>
 
         @include('userupdate')
        </tr>
    @endforeach
</table>
</p>

 </div>
   
    <div id="councils" class="tab-pane fade">
      <h2 class="mb-5">البلديات</h2>
     <p>



 <label for="name">إضافة بلدية جديدة</label>
  
<button type="submit" class="btn btn-lg activebutton" data-toggle="modal" data-target="#addcouncilmodel">إضافة</button>
@include('addcouncil')


<table class="table-dark table-hover table-bordered w-100 settingstable" id="councilstable">
    @foreach($councils as $council)
        <tr class="councilrow">
        <td>{{$council->id}} </td>
        <td> {{$council->name}}</td>
        <td>{{$council->user->name}}</td>
        
        <td ><button type="submit" class="fa fa-pencil border-0 bg-light"  data-toggle="modal" data-target="#updatemodelcouncil"></button> </td>
 
        @include('councilupdate')
        </tr>
    @endforeach
    
</table>
</p>

</div>
   
    <div id="states" class="tab-pane fade">
      <h2 class="mb-5">حالات البلاغ</h2>
      <p>

<form method="POST" action="/dashboard/state">
 {{ csrf_field() }}
 <label for="name">إضافة حالة بلاغ</label>
  <input type="text"  name="name"> 
 
 <button type="submit" class="btn btn-lg activebutton">إضافة</button>

</form>


<table class="table-dark table-hover table-bordered w-100 settingstable" id="statestable">
    @foreach($states as $state)
        <tr class="staterow">
        <td>{{$state->id}} </td>
        <td> {{$state->name}}</td>
        

        <td ><button type="submit" class="fa fa-pencil border-0 bg-light"  data-toggle="modal" data-target="#updatemodelstate"></button> </td>
 
         @include('stateupdate')
        </tr>
    @endforeach
   
</table>
</p>

  </div>
  </div>
    
</div>


@endsection
