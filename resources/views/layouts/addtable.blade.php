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
