@extends('admin.master')
@section('title' , 'edit class')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('classes.create')}}" method="post" class="">
	@csrf
	<div class="form-group">
		<label for="name"> Name</label>
		<input type="text" 
				class="form-control" 
				name="name">
		

	</div>

	<div class="form-group">
		<label for="teachername"> Teacher Name</label>
		<input type="text" 
				class="form-control" 
				name="teachername">
	</div>

	<div class="form-group">
		
		<select name="major" id="" class="form-control">
			<option value="cntt">
				CNTT
			</option>
			<option value="dpt">
				Đa phương tiện
			</option>
			<option value="mkt">
				Maketing
			</option>
		</select>
	</div>
	<div class="form-group">
		<label for="maxstudent"> Max student</label>
		<input type="number" name="maxstudent" id="maxstudent" class="form-control"> 
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn submit"> create class</button>
	</div>

</form>
@stop