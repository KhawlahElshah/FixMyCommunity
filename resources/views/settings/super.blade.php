@extends('layouts.master')


@section('content')


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">

<div class="col-3">
  <h2>إعدادات</h2>
  
  <ul class="nav flex-column nav-tabs">
    <li class="active"><a href="#types">أنواع البلاغات</a></li>
    <li><a href="#councils">البلديات</a></li>
    <li><a href="#users">المستخدمين</a></li>
    <li><a href="#states">حالات البلاغ</a></li>
  </ul>
</div>

  <div class="tab-content col-12 text-center">
    <div id="types" class="tab-pane fade in active">
      <h3>أنواع البلاغات</h3>
      <p>

<form method="POST" action="/supersettings/type">
{{ csrf_field() }}
 <label for="name">إضافة نوع بلاغ جديد</label>
  <input type="text"   name="name">
 <button type="submit" class="btn btn-lg activebutton">إضافة</button>
</form>

<table class="table-striped table-bordered w-100 settingstable" id="reporttypetable">
    @foreach($types as $type)
        <tr>
        <td>{{$type->id}} </td>
        <td> {{$type->name}}</td>
        
        <td><i class="fa fa-pencil" aria-hidden="true"> </td>
        <td><i class="fa fa-trash-o" aria-hidden="true"></td>
        </tr>
       
    @endforeach
</table>

</p>

    </div>
    <div id="councils" class="tab-pane fade">
      <h3>البلديات</h3>
     <p>

<form method="POST" action="/supersettings/council">
{{ csrf_field() }}

 <label for="name">إضافة بلدية جديدة</label>
  <input type="text"  name="name"> 
<button type="submit" class="btn btn-lg activebutton">إضافة</button>
</form>

<table class="table-striped table-bordered w-100 settingstable">
    @foreach($councils as $council)
        <tr>
        <td>{{$council->id}} </td>
        <td> {{$council->name}}</td>
        
        <td><i class="fa fa-pencil" aria-hidden="true"> </td>
        <td><i class="fa fa-trash-o" aria-hidden="true"></td>
        </tr>
    @endforeach
</table>
</p>

</div>
    <div id="users" class="tab-pane fade">
      <h3>المستخدمين</h3>
      <p>

 <label for="user">إضافة مستخدم جديد</label>

 <button type="submit" class="btn btn-lg activebutton" data-toggle="modal" data-target="#exampleModal">إضافة</button>
@include('signup')
<table class="table-striped table-bordered w-100 settingstable">
    @foreach($users as $user)
        <tr>
        <td>{{$user->id}} </td>
        <td> {{$user->name}}</td>
        <td> {{$user->email}}</td>
        <td> {{$user->council_id}}</td>
        <td><i class="fa fa-pencil" aria-hidden="true"> </td>
        <td><i class="fa fa-trash-o" aria-hidden="true"></td>
        </tr>
    @endforeach
</table>
</p>

 </div>
    <div id="states" class="tab-pane fade">
      <h3>حالات البلاغ</h3>
      <p>

<form method="POST" action="/supersettings/state">
{{csrf_field() }}
 <label for="name">إضافة حالة بلاغ</label>
  <input type="text"  name="name"> 
 
 <button type="submit" class="btn btn-lg activebutton">إضافة</button>

</form>


<table class="table-striped table-bordered w-100 settingstable">
    @foreach($states as $state)
        <tr>
        <td>{{$state->id}} </td>
        <td> {{$state->name}}</td>
        

        <td><i class="fa fa-pencil" aria-hidden="true"> </td>
        <td><i class="fa fa-trash-o" aria-hidden="true"></td>
        </tr>
    @endforeach
</table>
</p>

  </div>
  </div>
    
</div>


@endsection
