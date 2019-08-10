<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsAdminTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::table('admins', function (Blueprint $table) {
            $table->string('email');
            $table->string('password');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('admins');
          Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('password');
           
        });
    }
}
