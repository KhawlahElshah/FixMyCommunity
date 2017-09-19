@extends('layouts.master')


@section('content')
<div class="half text-right mb-3">

<p class="display-4 text-center"> الإحصائيات </p>

<form method="POST" action="/reports/show/getreport">
  <label for="councilname">اختر البلدية</label>


  <input type="hidden" id="showcouncilid">
  <input type="hidden" id="showcouncilreportcount">
  <input type="hidden" id="showcouncilhighdanger">
  <input type="hidden" id="showcouncilavregedanger">
  <input type="hidden" id="showcouncillowdanger">
  <input type="hidden" id="showcouncildonereports">
<table id="hiddenshowtable" >
<tbody style="display:none">
@foreach($councilitems as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->reports->count()}}</td>
<td> {{$item->reports->where('danger','عالي')->count()}} </td>
<td>{{$item->reports->where('danger','متوسط')->count()}}</td>
<td>{{$item->reports->where('danger','منخفض')->count()}}</td>
<td>{{$item->reports->where('status_id',3)->count()}}</td>
</tr>
 @endforeach
 </tbody>
</table>

{{--  
<table id="hiddenlocationtable">
<tbody style="display:none">
@foreach($locations as $location)
<tr>
<td>{{$location->council_id}}</td>
<td>{{$location->lat}}</td>
<td>{{$location->lng}}</td>

</tr>
 @endforeach
 </tbody>
</table>  --}}

<input type="hidden" name="locations" id="locations" value="{{$locations}}">


<select class="form-control mb-3" name="council_id" id="councilsselect">
<option selected>اختر البلدية</option>
@foreach($councilitems as $item)

<option value="{{$item->id}}">{{$item->name}}</option>

 @endforeach
</select>


 <label for="countdesc"> عدد البلاغات</label>
<label for "count" id="count"></label>
<br>


<table class="table text-center">
  <thead>
    <tr>
      <th>عالي الخطورة</th>
      <th>متوسط الخطورة</th>
      <th>منخفض الخطورة</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <td id="high"></td>
      <td id="avrage"></td>
      <td id="low"></td>
    </tr>

  </tbody>
</table>

<br>


<label for="description">  عدد البلاغات التي تمت معالجتها</label>
 <label for "countdone" id="countdone"></label>

</form>
</div>

<div class="half">
<p class="display-4 text-center"> البلاغات السابقة </p>
@include('layouts.showmap')

</div>

@endsection