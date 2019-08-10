

    @foreach($classes as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->teacher_name}}</td>
        <td>{{$value->major}}</td>
        <td>
        @if (count($value->admins))
        @foreach ($value->admins as $admin)
         <td>{{$admin->name}}</td>   
        @endforeach
        @else 
          <p>không có </p>
        @endif
      </td>
        <td>{{$value->max_student}}</td>
        <td></td>
        <td><a href="{{route('classes.remove', $value->id)}}" title=""><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalScrollable">Xoá</button></a>
            <a href="{{route('classes.edit', $value->id)}}" title=""><button type="button" class="btn btn-primary ">Sửa</button></a></td>

      </tr>
    @endforeach



          