<table>
	<thead>
		<th>id</th>	
		<th>name</th>	
		<th>teacher_name</th>
		<th>major</th>
		<th>max student</th>
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