@extends('layouts.master')


@section('content')


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">

<div class="col-3">
  <h2>إعدادات</h2>
  
  <ul class="nav flex-column nav-tabs">
    <li class="active"><a href="#reports">تعديل البلاغات</a></li>
  
  </ul>
</div>

  <div class="tab-content col-12 text-center">
    <div id="reports" class="tab-pane fade in active">
      <h3>أنواع البلاغات</h3>
      <p>


<table class="table-striped table-bordered w-100 settingstable">
 <tr >
        <th class="text-center">#</th>
        <th class="text-center">البلدية</th>
        <th class="text-center">نوع البلاغ</th>
        <th class="text-center">الخطورة</th>
        <th class="text-center">الوصف</th>
        <th class="text-center">الحالة</th>
        <th class="text-center"></th>
        <th class="text-center"></th>
        </tr>
    @foreach($reports as $report)
       
        <tr>
        <td>{{$report->id}} </td>
        <td> {{$report->council->name}}</td>
        <td> {{$report->type->name}}</td>
        <td> {{$report->danger}}</td>
        <td> {{$report->desc}}</td>
        <td> {{$report->status}}</td>

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
