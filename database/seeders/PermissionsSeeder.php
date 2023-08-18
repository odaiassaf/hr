<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             $permission = [
       [
        'name'=>'create department',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'update department',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'view department',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'edit department',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'delete department',
        'guard_name'=>'sanctum'
       ],
        [
        'name'=>'create role',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'update role',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'view role',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'edit role',
        'guard_name'=>'sanctum'
       ],
       [
        'name'=>'delete role',
        'guard_name'=>'sanctum'
       ],
       
       ];

       Permission::insert($permission);
         $roles = [
       [
        'name'=>'Admin',
        'guard_name'=>'sanctum'
       ],
        [
        'name'=>'User',
        'guard_name'=>'sanctum'
       ],
        [
        'name'=>'Officer',
        'guard_name'=>'sanctum'
       ],
    ];
    Role::insert($roles);
    }
}
