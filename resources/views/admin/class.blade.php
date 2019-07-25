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
    <th>max student</th>
        </tr>
  </thead>
  <!-- <tbody>
    @foreach($classes as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->teacher_name}}</td>
        <td>{{$value->major}}</td>
        <td>{{$value->max_student}}</td>

      </tr>
    @endforeach
  </tbody> -->
  @include('