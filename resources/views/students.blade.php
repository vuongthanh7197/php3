<table border="1">
	<thead>
		<th>ID</th>
		<th>name</th>
		<th>address</th>
		<th>university</th>
	</thead>
	<tbody>
		@for($i = 0; $i < count($students); $i++)
			<tr>
				<td>{{$students[$i]->id}}</td>
				<td>{{$students[$i]->name}}</td>
				<td>{{$students[$i]->address}}</td>
				<td>{{$students[$i]->university}}</td>
			</tr>
		@endfor
	</tbody>
</table>