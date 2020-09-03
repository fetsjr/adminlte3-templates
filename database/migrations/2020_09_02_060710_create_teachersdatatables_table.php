<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersDatatablesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachersDatatables', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('designation');
            $table->date('birthday');
            $table->string('gender');
            $table->string('religion');
            $table->string('phone');
            $table->date('joining_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teachersDatatables');
    }
}
