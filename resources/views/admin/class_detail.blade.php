<table class="table">
  <thead>
    <tr>
      <th >#</th>
      <th >First</th>
      <th >Last</th>
      <th >Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($classes as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->teacher_name}}</td>
        <td>{{$value->major}}</td>
        <td>{{$value->max_student}}</td>

      </tr>
    @endforeach
  </tbody>
</table>