<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_contractors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('constname');
            $table->string('address');
            $table->string('mobileno');
            $table->string('contactno');
            $table->string('liasonname');
            $table->string('taxid');
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
        Schema::drop('supplier_contractors');
    }
}
