@extends('admin.master')
@section('title' , 'new class')
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
<form action="{{route(isset($class) ? 'classes.update' : 'classes.create')}}" method="post" class="">
	@csrf
	@if(isset($class))
	<input type="hidden" name="id" value="{{$class->id}}">
	@endif
	<div class="form-group">
		<label for="name"> Name</label>
		<input type="text" 
				class="form-control" 
				name="name"
				value="{{isset($class) ? $class->name : ''}}">
		

	</div>

	<div class="form-group">
		<label for="teachername"> Teacher Name</label>
		<input type="text" 
				class="form-control" 
				name="teacher_name"
				value="{{isset($class) ? $class->teacher_name : ''}}">
	</div>

	<div class="form-group">
		
		<select name="major" id="" class="form-control">
			<option value="cntt" selected="{{isset($class) && $class->major == 'cntt'}}">
				CNTT
			</option>
			<option value="dpt"
			selected="{{isset($class) && $class->major == 'dpt'}}">
				Đa phương tiện
			</option>
			<option value="mkt"
			selected="{{isset($class) && $class->major == 'mkt'}}">
				Maketing
			</option>
		</select>
	</div>
	<div class="form-group">
		<label for="maxstudent"> Max student</label>
		<input type="number" name="max_student" id="maxstudent" class="form-control"
		value="{{isset($class) ? $class->max_student : ''}}"> 
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn submit"> create class</button>
	</div>

</form>
@stop