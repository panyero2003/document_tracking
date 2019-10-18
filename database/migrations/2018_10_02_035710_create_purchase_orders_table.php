<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('dep_id')->unsigned()->index();
             $table->string('supplier');
             $table->string('address');
             $table->string('ponumber');

            $table->string('bacprno');
            $table->date('bacrecdate');
            $table->integer('bacstatus_id');
            $table->date('bacreldate');
            $table->string('pboobrno');
            $table->date('pdorecdate');
            $table->integer('pbosource_id')->unsigned()->index();
            $table->string('pboacctcode');
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
            $table->date('ptotorecdate');
           
            $table->string('ptostatus');
            $table->date('ptostatusdatetime');
            $table->date('ptoreldate');
            $table->date('pgorecdate');
            $table->integer('pgostatus_id');
            $table->string('pgostatusdatetime');
            $table->date('pgoreldate');
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
        Schema::drop('purchase_orders');
    }
}
