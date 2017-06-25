<?php

use Illuminate\Database\Seeder;
use trabalho\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role_employee = new Role();
        $role_employee->name = 'publico';
        $role_employee->description = 'Pessoas gerais';
        $role_employee->save();


        $role_superAdmin = new Role();
        $role_superAdmin->name = 'superAdmin';
        $role_superAdmin->description = 'Administrador geral do sistema';
        $role_superAdmin->save();
        
    }
}
