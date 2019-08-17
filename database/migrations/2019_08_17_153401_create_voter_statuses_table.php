<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoterStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_voterstatus', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('student_no' , 15);
            $table->integer('election_id')->length(10)->unsigned();
            $table->char('status', 1);

            $table->foreign('student_no')
                ->references('student_no')
                ->on('tbl_students')
                ->onUpdate('cascade');

            $table->foreign('election_id')
                ->references('election_id')
                ->on('tbl_elections')
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
        Schema::dropIfExists('tbl_voterstatus');
    }
}
