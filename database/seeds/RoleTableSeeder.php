<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'Author';
        $role_author->description = 'An Author';
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A Admin';
        $role_admin->save();

        $role_budget = new Role();
        $role_budget->name = 'Budget';
        $role_budget->description = 'A Budget';
        $role_budget->save();

        $role_acc = new Role();
        $role_acc->name = 'Accounting';
        $role_acc->description = 'An Accounting';
        $role_acc->save();

        $role_treas = new Role();
        $role_treas->name = 'Treasurer';
        $role_treas->description = 'A Treasurer';
        $role_treas->save();

        $role_bac = new Role();
        $role_bac->name = 'BAC';
        $role_bac->description = 'A BAC';
        $role_bac->save();

        $role_pgo = new Role();
        $role_pgo->name = 'PGO';
        $role_pgo->description = 'A PGO';
        $role_pgo->save();

        $role_pgso = new Role();
        $role_pgso->name = 'PGSO';
        $role_pgso->description = 'A PGSO';
        $role_pgso->save();
    }
}
