


<div class="modal fade" id="addcouncilmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
<form method="POST" action="/dashboard/council">
 {{ csrf_field() }}


<label for="name" class="col-8">اسم البلدية</label>
<input type="text" id="councilnamefieldadd" name="councilnamefieldadd" class="form control">

<label for="name" class="col-8">مشرف البلدية</label>
<select class="form-control mb-3" id="useridfieldselect" name="useridfieldselect">
 
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
            </select>
      </div>
      <div class="modal-footer justify-content-center">
        {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>  --}}
        <button type="submit" class="btn activebutton">حفظ</button>
</form>

</div>
</div>
</div>
</div>