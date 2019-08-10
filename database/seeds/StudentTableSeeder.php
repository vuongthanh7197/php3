<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count()==0){
    		DB::table('students')->insert([
    			[
    				"id"=>1,
    				'name' => "pt1111",
    				'address' => " ccccc",
    				'university' => 'CNTT',
    				'class_id' => '2'

    			],
    			[
    				"id"=>2,
    				'name' => "pt1113",
    				'address' => " cccccc",
    				'university' => 'mkt',
    				'class_id' => '2'

    			],
    			[
    				"id"=>3,
    				'name' => "pt1113",
    				'address' => " ccc",
    				'university' => 'MT',
    				'class_id' => '2'

    			],


    		]);
    	}
        
    }
    }

