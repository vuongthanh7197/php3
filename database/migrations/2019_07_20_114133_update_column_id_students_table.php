<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnIdStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table ('students', function(Blueprint $table){
                $table->bigIncrements('id')->change();
                $table->string('name');
                $table->string('address');
                $table->string('university'); 
                $table->Integer('class_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table ('students', function(Blueprint $table){
            $table->dropcolumn('class_id');
            $table->BigInteger('id')->change();

           });  
    }
}
