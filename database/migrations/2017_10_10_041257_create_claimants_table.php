<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claimants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('claimantname');
            $table->string('address');
            $table->string('claimanttype');
            $table->string('claimantno');
            $table->string('contactno');
            $table->string('mobileno');
            $table->string('agencyname');
            $table->integer('categoryclient_id');
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
        Schema::drop('claimants');
    }
}
