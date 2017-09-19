{{--  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>  --}}

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="updatemodeluser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               
         
       <form method="POST" action="/dashboard/user/{useridfield}/update">
        {{ method_field('PATCH') }}
         {{ csrf_field() }}

        <label for="name" class="col-12">تعديل بيانات المستخدم</label>
        <input type="hidden" name="useridfield" id="useridfield">

        <label class="col-4" for="usernamefield">الاسم</label>
         <input class="col-6" type="text" id="usernamefield" name="usernamefield">
         

         <label class="col-4" for="useremailfield">البريد الإلكتروني</label>
         <input type="text" class="col-6" id="useremailfield" name="useremailfield">


         <label class="col-4" for="usercouncilfield">البلدية</label>

         <select class="col-6" name="council_id">

            @foreach($councils as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
                            
                               
      </div>
      <div class="modal-footer justify-content-center">
        {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>  --}}
        <button type="submit" class="btn activebutton">حفظ</button>
        </form>



<form id="typetrash" action="/dashboard/user/{useridfield}/delete" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" name="useridfielddelete" id="useridfielddelete">
            <button  type="submit" class="btn  btn-secondary" >حذف</button>
            </form>

      </div>
    </div>
  </div>
</div>