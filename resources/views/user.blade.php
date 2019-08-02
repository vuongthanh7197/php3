@extends('layout.master')

@section('title','user page')
	


<div>
	@section('table_name', 'user')

</div>
@section('table')
<table border="1">
	<thead>
		<th>ID</th>
		<th>name</th>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Tuan</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Khang</td>
		</tr>
	</tbody>
</table>		
@endsection
@section('custom')
	@include('sections.custom')
@endsection
