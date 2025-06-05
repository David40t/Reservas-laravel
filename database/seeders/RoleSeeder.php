<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Permission::create(
            ['name' => 'create-reservas'],
            ['name' => 'delete-reservas'],
            ['name' => 'update-reservas'],
            ['name' => 'view-reservas'],
            ['name' => 'create-users'],
            ['name' => 'delete-users'],
            ['name' => 'update-users'],
            ['name' => 'view-users'],
            ['name' => 'create-roles'],
            ['name' => 'delete-roles'],
            ['name' => 'update-roles'],
            ['name' => 'view-roles'],
            ['name' => 'create-permissions'],
            ['name' => 'delete-permissions'],
            ['name' => 'update-permissions'],
            ['name' => 'view-permissions'],
            ['name'=> 'view-all-reservas']
        );
        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'user'])->getPermissionNames(['create-reservas','delete-reservas','update-reservas','view-reservas']);
        
    }
}
