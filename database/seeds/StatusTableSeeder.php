<?php

use Illuminate\Database\Seeder;


class StatusTableSeeder extends Seeder {
 
  public function run()
       {
         //delete users table records
         DB::table('statuses')->delete();
         //insert some dummy records
         DB::table('statuses')->insert(array(
             array('name'=>''),
             array('name'=>'Pending'),
             array('name'=>'On-Process'),
             array('name'=>'Released'),
             

          ));
       }
 
}
