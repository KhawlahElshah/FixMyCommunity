@extends('layouts.usersmaster')


@section('content')


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">

<div class="col-3">
  <h2>إعدادات</h2>
  
  <ul class="nav flex-column nav-tabs" >
    <li class="active"><a href="#reports">تعديل البلاغات</a></li>
  
  </ul>
</div>

  <div class="tab-content col-12 text-center">
    <div id="reports" class="tab-pane fade in active">
      <h3>أنواع البلاغات</h3>
      <p>


<table class="table-striped table-bordered w-100 settingstable" id="settingstable" >
 <tr >
        <th class="text-center">#</th>
        <th class="text-center">نوع البلاغ</th>
        <th class="text-center">الخطورة</th>
        <th class="text-center">الوصف</th>
        <th class="text-center">الحالة</th>
        <th class="text-center"></th>
        <th class="text-center"></th>
        </tr>
    @foreach($councilreports as $councilreport)
       
        <tr>
        <td>{{$councilreport->id}} </td>
        <td> {{$councilreport->type->name}}</td>
        <td> {{$councilreport->danger}}</td>
        <td> {{$councilreport->desc}}</td>
        <td> {{$councilreport->state->name}}</td>

        <td><button type="submit" class="fa fa-pencil border-0 bg-light reportupdate"  data-toggle="modal" data-target="#updatesettings" ></button> </td>
        
        </tr>
    @endforeach
    @include('settingsupdate')
</table>
</p>

    </div>
   
  </div>
    
</div>


@endsection
