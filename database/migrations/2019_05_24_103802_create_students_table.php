<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->string('student_no', 15);
            $table->primary('student_no');
            $table->text('student_pw', 20);
            $table->string('lastname', 30);
            $table->string('firstname', 30);
            $table->string('middlename', 30)->nullable();
            $table->string('course_id', 20);
            $table->integer('year')->length(1)->unsigned();
            $table->integer('section')->length(1)->unsigned();
            $table->string('email_add');
            $table->timestamps();

            $table->foreign('course_id')
                ->references('course_id')
                ->on('tbl_courses')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_students');
    }
}
