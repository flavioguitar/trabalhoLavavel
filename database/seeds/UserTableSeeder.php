<?php

use Illuminate\Database\Seeder;
use trabalho\Role;
use trabalho\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role_employee = Role::where('name', 'publico')->first();
       $role_superAdmin = Role::where('name', 'superAdmin')->first();


        $employee = new User();
        $employee->name = 'exemplo 1';
        $employee->email = 'exemplo@gmail.com';
        $employee->password = bcrypt('102030');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $superAdmin = new User();
        $superAdmin->name = 'super administrador';
        $superAdmin->email = 'superadmin@gmail.com';
        $superAdmin->password = bcrypt('102030');
        $superAdmin->save();
        $superAdmin->roles()->attach($role_superAdmin);
    }
}
