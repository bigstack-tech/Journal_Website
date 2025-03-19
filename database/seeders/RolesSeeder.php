<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached roles and permissions
         app()[Permission::class]->forgetCachedPermissions();

         // create roles and assign existing permissions
         $roleUser = Role::updateOrCreate(['name' => 'user']);
         $roleAuthor = Role::updateOrCreate(['name' => 'Author']);
         $roleAdmin = Role::updateOrCreate(['name' => 'admin']);
         $roleAdmin->givePermissionTo(Permission::all());
    }
}
