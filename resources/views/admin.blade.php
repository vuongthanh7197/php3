@extends('layout.master')

@section('title')
	admin page
@endsection

<div>
	@section('table_name')
		admin
	@endsection
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
				<td>Thanh</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Trung</td>
			</tr>
		</tbody>
	</table>		
@endsection