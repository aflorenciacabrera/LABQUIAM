<?php

use Illuminate\Database\Seeder;
use labquiam\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        
        $role = new Role();
        $role->name = 'usuario';
        $role->description = 'Usuario';
        $role->save();

        $role = new Role();
        $role->name = 'cliente';
        $role->description = 'Cliente';
        $role->save();
    }
}
