<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmployePasswordColumn extends Migration
{
    public function up()
    {
        Schema::table('employe', function (Blueprint $table) {
            $table->string('password', 255)->change(); // Increase to 255 characters
        });
    }

    public function down()
    {
        Schema::table('employe', function (Blueprint $table) {
            $table->string('password', 50)->change(); // Revert to original size
        });
    }
}
