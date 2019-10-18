<?php

use Illuminate\Database\Seeder;


class CategoryTableSeeder extends Seeder {
 
  public function run()
       {
         //delete users table records
         DB::table('categoryclients')->delete();
         //insert some dummy records
         DB::table('categoryclients')->insert(array(
             array('name'=>'Supplier'),
             array('name'=>'Employee'),
             array('name'=>'Student Scholar'),
             array('name'=>'Contractor'),
             

          ));
       }
 
}
