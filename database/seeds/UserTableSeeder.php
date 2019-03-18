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
        $user->name = 'Laboratorio LABQUIAM';
        $user->nombre = 'LABQUIAM';
        $user->apellido = '';
        $user->trabajo= 'Administrar del sistema';
        $user->lugar= 'UNNE';
        $user->email = 'labapisenasa@gmail.com';
        $user->observacion = 'tel interno 103';
        $user->direccion= 'Avenida Libertad Nº 5450';
        $user->telefono= '03783-457996';
        $user->rol = 'admin';
        $user->estado = '1';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Técnico';
        $user->nombre = 'Tecnico';
        $user->apellido = 'Tecnico';
        $user->trabajo= 'Encargado de muestras';
        $user->observacion = 'Toma de muestra';
        $user->lugar= 'UNNE';
        $user->direccion= 'Bolivar 345';
        $user->telefono= '3795053426';
        $user->email = 'tecnico@example.com';
        $user->rol = 'tecnico';
        $user->estado = '1';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_tecnico);

        $user = new User();
        $user->name = 'Cliente';
        $user->nombre = 'Cliente';
        $user->apellido = 'Cliente';
        $user->trabajo= 'Pedido de muestras';
        $user->observacion = 'solicita un analisis de muestra';
        $user->lugar= 'UNNE';
        $user->direccion= 'Bolivar 345';
        $user->telefono= '3795053426';
        $user->email = 'cliente@example.com';
        $user->rol = 'cliente';
        $user->estado = '0';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_cliente);
    }
}
