 <div class="section">
 <hr>
<div class="half">
<p class="display-4 text-center "> بيانات البلاغ</p>


<form method="POST" action="{{ url('/') }}" >
 {{ csrf_field() }}
 <label for="reporttype">نوع البلاغ</label>
<select class="form-control mb-3" name="type_id">
 
@foreach($reporttypeitems as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
</select>


  <label for="councilname">البلدية</label>
<select class="form-control mb-3" name="council_id">

@foreach($councilitems as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
</select>

<label for="danger">الخطورة</label>
<select class="form-control mb-3" name="danger">
  <option>منخض</option>
   <option selected>متوسط</option>
    <option  >عالي</option>
</select>

   <label for="description"> وصف (اختياري)</label>
   <textarea name="desc" class="form-control mb-3" rows="5"></textarea>

    <input type="hidden" class="form-control"  name="status_id" value='1'>

   <button type="submit" class="btn btn-lg activebutton">إضافة</button>


</form>
</div>

<div class="half">
<p class="display-4 text-center"> قم بإختيار مكان البلاغ </p>
@include('layouts.map')


</div>

</div>

