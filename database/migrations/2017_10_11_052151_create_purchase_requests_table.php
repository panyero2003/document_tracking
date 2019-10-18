<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dep_id')->unsigned()->index();
            $table->string('bacprno');
            $table->date('bacrecdate');
            $table->integer('bacstatus_id');
            $table->date('bacreleaseddate');
            $table->string('bacreleasedto');
            $table->string('bacreleasedreason');
            $table->string('pboobrno');
            $table->date('pdorecdate');
            $table->integer('pbosource_id')->unsigned()->index();
            $table->string('pboacctcode');
            $table->string('pboreleasedto');
            $table->string('pboreleasedreason');
            $table->string('obrpart');
            $table->string('obrtranstype_id');
            $table->decimal('obramt',8,2);
            $table->integer('pbostatus_id');
            $table->date('pbostatusdatetime');
            $table->date('pboreldate');
            $table->date('pacctorecdate');
            $table->integer('pacctostatus_id');
            $table->string('pacctostatusdatetime');
            $table->date('pacctoreldate');
            $table->string('pacctoreleasedto');
            $table->string('pacctoreleasedreason');
            $table->date('ptotorecdate');
           
            $table->string('ptostatus_id');
            $table->date('ptostatusdatetime');
            $table->date('ptoreldate');
            $table->string('ptoreleasedto');
            $table->string('ptoreleasedreason');
            $table->date('pgorecdate');

            $table->integer('pgostatus_id');
            $table->string('pgostatusdatetime');
            $table->date('pgoreldate');
            $table->string('pgoreleasedto');
            $table->string('pgoreleasedreason');
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
        Schema::drop('purchase_requests');
    }
}
