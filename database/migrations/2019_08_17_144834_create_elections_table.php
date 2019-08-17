<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_elections', function (Blueprint $table) {
            $table->Increments('election_id', 10);
            $table->string('electioname', 100);
            $table->string('term',9);
            $table->date('startdate');
            $table->time('starttime');
            $table->date('enddate');
            $table->time('endtime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_elections');
    }
}
