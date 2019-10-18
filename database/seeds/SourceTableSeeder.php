<?php

use Illuminate\Database\Seeder;


class SourceTableSeeder extends Seeder {
 
  public function run()
       {
         //delete users table records
         DB::table('sources')->delete();
         //insert some dummy records
         DB::table('sources')->insert(array(
             array('name'=>'General Fund'),
             array('name'=>'SEF'),
             array('name'=>'Trust Fund'),
             

          ));
       }
 
}
