<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_orgs', function (Blueprint $table) {
            $table->string('org_id', 20);
             $table->primary('org_id');
            $table->string('org_name', 100);
            $table->mediumText('org_logo')->nullable();
            $table->string('course_id', 20);

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
        Schema::dropIfExists('tbl_orgs');
    }
}
