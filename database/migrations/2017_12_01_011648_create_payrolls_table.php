<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dep_id')->unsigned()->index();
            $table->integer('claimant_id')->unsigned()->index();
            $table->string('pboobrno');
            $table->string('payee');
            $table->date('pbodate');
            $table->string('pboacctcode');
            $table->string('obrpart');
            $table->integer('pbosource_id')->unsigned()->index();
            $table->integer('obrtranstype_id');
            $table->string('pboparticulars');
            $table->double('obramnt');
            $table->integer('pbostatus_id');
            $table->date('pbostatusdatetime');
            $table->date('pboreldate');
            $table->string('pboreleasedreason');
            $table->string('dvno');
            $table->date('pacctodate');
            $table->date('pacctoamt');
            $table->integer('pacctostatus_id');
            $table->date('pacctostatusdatetime');
            $table->date('pacctoreldate');
            $table->string('pacctoreleasedreason');
            
            $table->date('pgodate');
            $table->integer('pgostatus_id');
            $table->date('pgostatusdatetime');
            $table->date('pgoreldate');
            $table->string('pgoreleasedreason');
            $table->date('ptodate');
            $table->integer('ptostatus_id');
            $table->date('ptostatusdatetime');
            $table->date('ptoreldate');
            $table->string('ptoreleasedreason');
            $table->integer('is_released');
            $table->integer('is_released_bac');
            $table->integer('is_released_account');
            $table->integer('is_released_treas');
            $table->integer('is_released_pgo');
            $table->integer('is_released_pgso');

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
        Schema::drop('payrolls');
    }
}
