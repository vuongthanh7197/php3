<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    protected $table = 'admins';
     protected $fillable = [
    	'name',
        'university',
        'is_active',
        'class_id', 
        'email'  	
    ];
    protected $hidden = ['password'];
    public function classRoom(){
        return $this->belongsTo('App\Models\classRoom', 'class_id' , 'id');
    }
}
