<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(DB::table('classes')->count()==0){
    		DB::table('classes')->insert([
    			[
    				"id"=>1,
    				'name' => "pt1111",
    				'teacher_name' => " ccccc",
    				'major' => 'CNTT',
    				'max_student' => 30

    			],
    			[
    				"id"=>2,
    				'name' => "pt1113",
    				'teacher_name' => " cccccc",
    				'major' => 'mkt',
    				'max_student' => 20

    			],
    			[
    				"id"=>3,
    				'name' => "pt1113",
    				'teacher_name' => " ccc",
    				'major' => 'MT',
    				'max_student' => 25

    			],


    		]);
    	}
        
    }
}
