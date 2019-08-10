<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
    	'name',
    	'address',
    	'university',
    	'class_id',
	];
	public function classRoom() {
		return $this->belongsTo('App\Models\Student');
	}
}
