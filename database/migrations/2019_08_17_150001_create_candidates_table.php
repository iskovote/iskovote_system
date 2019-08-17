<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_candidates', function (Blueprint $table) {
            $table->Increments('c_id');
            $table->string('student_no', 15);
            $table->mediumText('picture')->nullable();
            $table->string('bio', 200);
            $table->integer('p_id')->length(5)->unsigned();
            $table->integer('party_id')->length(10)->unsigned();
            $table->integer('election_id')->length(10)->unsigned();
            $table->integer('vote_standing')->length(10)->unsigned();
            $table->timestamps();


            $table->foreign('student_no')
                ->references('student_no')
                ->on('tbl_students')
                ->onUpdate('cascade');

            $table->foreign('p_id')
                ->references('p_id')
                ->on('tbl_positions')
                ->onUpdate('cascade');

            $table->foreign('party_id')
                ->references('party_id')
                ->on('tbl_partylists')
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
        Schema::dropIfExists('tbl_candidates');
    }
}
