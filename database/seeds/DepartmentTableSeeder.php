<?php

use Illuminate\Database\Seeder;


class DepartmentTableSeeder extends Seeder {
 
  public function run()
       {
         //delete users table records
         DB::table('departments')->delete();
         //insert some dummy records
         DB::table('departments')->insert(array(
             array('depname'=>'Management Information System Office'),
             array('depname'=>'Provincial Governor Office'),
             array('depname'=>'Provincial Accountant Office'),
             array('depname'=>'Provincial Agriculture Office'),
             array('depname'=>'Provincial Budget Office'),
             array('depname'=>'Provincial Treasurer Office'),
             array('depname'=>'Provincial Planning and Development Office'),
             array('depname'=>'Provincial Assessor Office'),
             array('depname'=>'Provincial Human Resource and Development Office'),
             array('depname'=>'Provincial Veterinary Office'),
             array('depname'=>'Provincial General Services Office'),
             array('depname'=>'Provincial Social Welfare and Development Office'),
             array('depname'=>'Provincial Library Office'),
             array('depname'=>'Provincial Information Office'),
             array('depname'=>'Provincial Engineering Office'),
             

          ));
       }
 
}
