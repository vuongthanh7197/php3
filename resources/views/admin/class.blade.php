@extends('admin.master')

@section('title' , 'class page')

@section('content')
		<table class="table">
  <thead>
    <tr>
      <th>id</th> 
    <th>name</th> 
    <th>teacher_name</th>
    <th>major</th>
    <th>admin</th>
    <th>max student</th>
    <th><a href="{{route('classes.add')}}" title=""><button type="button" class="btn btn-success ">Thêm</button></a></td></th>
        </tr>
  </thead>
  @include('admin.class_detail')
</table>

@endsection