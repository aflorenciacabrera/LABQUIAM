<?php

use Illuminate\Database\Seeder;
use labquiam\User;
use labquiam\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $role_admin = Role::where('name', 'admin')->first();
        $role_tecnico = Role::where('name', 'tecnico')->first();
        $role_cliente = Role::where('name', 'cliente')->first();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->rol = 'admin';
        $user->estado = '1';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Técnico';
        $user->email = 'tecnico@example.com';
        $user->rol = 'tecnico';
        $user->estado = '1';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_tecnico);

        $user = new User();
        $user->name = 'Cliente';
        $user->email = 'cliente@example.com';
        $user->rol = 'cliente';
        $user->estado = '0';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_cliente);
    }
}
