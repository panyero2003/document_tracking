<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_slips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dep_id');
            $table->string('pgsorisno');
            $table->date('pgsodate');
            $table->integer('pgsostatus_id');
            $table->date('pgsostatusdatetime');
            $table->date('pgsoreldate');
            $table->integer('pboobrno');
            $table->date('pbodate');
            $table->string('pbosource');
            $table->string('pboacctcode');
            $table->string('obrpart');
            $table->string('obrtranstype');
            $table->double('obramt',8,2);
            $table->integer('pbostatus_id');
            $table->date('pbostatusdatetime');
            $table->date('pboreldate');
            $table->date('pacctodate');
            $table->integer('pacctostatus_id');
            $table->date('pacctostatusdatetime');
            $table->date('pacctoreldate');
            

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
        Schema::drop('requisition_slips');
    }
}
