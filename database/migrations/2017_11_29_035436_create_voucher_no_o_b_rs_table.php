<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherNoOBRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_no_o_b_rs', function (Blueprint $table) {
            $table->increments('id');
           $table->integer('dep_id')->unsigned()->index();
            $table->integer('const_id')->unsigned()->index();
            $table->integer('claimant_id')->unsigned()->index();
            $table->string('dvno');
            $table->string('payee');
            $table->date('pacctorecdate');
            $table->integer('source_id');
            $table->string('pacctopart');
            $table->integer('pacctotranstype_id');
            $table->double('pacctoamt',10,2);
            $table->integer('pacctostatus_id');
            $table->date('pacctostatusdate');
            $table->date('pacctoreldate');
            $table->date('ptodate');
            $table->integer('ptostatus_id');
            $table->date('ptostatusdate');
            $table->date('ptoreldate');
            $table->date('pgodate');
            $table->integer('pgostatus_id');
            $table->date('pgostatusdatetime');
            $table->date('pgoreldate');



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
        Schema::drop('voucher_no_o_b_rs');
    }
}
