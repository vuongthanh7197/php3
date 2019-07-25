<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';
	protected $filltable = [
		'name',
		'address',
		'university',
		'class_id',
	];
}
