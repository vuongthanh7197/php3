<table border="1">
	<thead>
		<th>ID</th>
		<th>name</th>
		<th>teacher_name</th>
		<th>major</th>
		<th>max_student</th>
	</thead>
	<tbody>
		
		@foreach($classes as $key => $value)
<!-- 			@if($value->id %2)
				<tr style="background: green">
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->teacher_name}}</td>
					<td>{{$value->major}}</td>
					<td>{{$value->max_student}}</td>
				</tr>
			@else
				<tr style="background: yellow">
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->teacher_name}}</td>
					<td>{{$value->major}}</td>
					<td>{{$value->max_student}}</td>
				</tr>
			@endif -->
				<tr style="background: {{$value->id %2 ? 'yellow' : 'green'}}">
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->teacher_name}}</td>
					<td>{{$value->major}}</td>
					<td>{{$value->max_student}}</td>
				</tr>	
		@endforeach
	</tbody>
</table>