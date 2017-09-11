@extends('layouts.master')


@section('content')
<div class="half text-right mb-3">

<p class="display-4 text-center"> الإحصائيات </p>

<form>
  <label for="councilname">اختر البلدية</label>
<select class="form-control mb-3" name="council_id">

@foreach($councilitems as $item)
<option value="{{$item->item_id}}">{{$item->name}}</option>
@endforeach
</select>

 <label for="countdesc"> عدد البلاغات</label>
<label for "count"></label>
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
      <td>34</td>
      <td>32</td>
      <td>21</td>
    </tr>

  </tbody>
</table>

<br>


<label for="description">  عدد البلاغات التي تمت معالجتها</label>
 <label for "countdone"></label>
</form>
</div>

<div class="half">
<p class="display-4 text-center"> البلاغات السابقة </p>
@include('layouts.map')

</div>

@endsection