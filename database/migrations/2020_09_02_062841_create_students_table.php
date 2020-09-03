<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->bigInteger('parent_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('religion');
            $table->string('phone');
            $table->text('address');
            $table->string('state');
            $table->string('country');
            $table->string('register_no');
            $table->string('group');
            $table->string('activities');
            $table->text('remarks');
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
        Schema::drop('students');
    }
}
