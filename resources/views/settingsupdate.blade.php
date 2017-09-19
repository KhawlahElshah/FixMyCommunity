{{--  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>  --}}

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="updatesettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                       
       <form method="POST" action="/dashboard/report/{reportidfield}/update">
        {{ method_field('PATCH') }}
         {{ csrf_field() }}

        <label for="name" class="col-8">تعديل حالة البلاغ</label>
        <input type="hidden" name="reportidfield" id="reportidfield">
        <select class="form-control mb-3" id="stateidfieldselect" name="stateidfieldselect">
 
            @foreach($states as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
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