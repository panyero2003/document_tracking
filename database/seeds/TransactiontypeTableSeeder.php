<?php

use Illuminate\Database\Seeder;


class TransactiontypeTableSeeder extends Seeder {
 
  public function run()
       {
         //delete users table records
         DB::table('transaction_types')->delete();
         //insert some dummy records
         DB::table('transaction_types')->insert(array(
             array('name'=>'Personal Services'),
             array('name'=>'MOOE'),
             array('name'=>'Capital Outlay'),
             

          ));
       }
 
}
