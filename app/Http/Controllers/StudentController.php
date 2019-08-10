<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
   public function index(){
   	$students = Student::all();
   	return view('student', ['students'=> $students]);
   }
}
