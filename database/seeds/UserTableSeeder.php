<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_cliente = Role::where('name', 'cliente')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@taller.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@taller.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->name = 'Cliente';
        $user->email = 'cliente@taller.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_cliente);
     }
}