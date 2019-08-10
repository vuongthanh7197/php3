<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('admins')->count()==0){
    		DB::table('admins')->insert([
    			[
    				"id"=>1,
    				'name' => "pt1111",
    				'university' => "FPT",
    				'class_id' => 9
    				

    			],
    			["id"=>2,
    				'name' => "pt11111",
    				'university' => "FPT",
    				'class_id' => 21

    			],
    			[
    				"id"=>3,
    				'name' => "admin3",
    				'university' => "FPT",
    				'class_id' => 12

    			],


    		]);
    	}
    }
}
