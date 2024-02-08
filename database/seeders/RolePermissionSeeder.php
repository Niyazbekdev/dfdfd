<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        Permission::create(['name' => 'role:viewAny']);
        Permission::create(['name' => 'role:view']);
        Permission::create(['name' => 'role:assign']);
        Permission::create(['name' => 'role:create']);
        Permission::create(['name' => 'role:update']);
        Permission::create(['name' => 'role:delete']);
        Permission::create(['name' => 'role:restore']);
        Permission::create(['name' => 'permission:viewAny']);
        Permission::create(['name' => 'permission:view']);
        Permission::create(['name' => 'permission:assign']);
        Permission::create(['name' => 'permission:create']);
        Permission::create(['name' => 'permission:update']);
        Permission::create(['name' => 'permission:delete']);
        Permission::create(['name' => 'permission:restore']);
        Permission::create(['name' => 'user:viewAny']);
        Permission::create(['name' => 'user:view']);
        Permission::create(['name' => 'user:create']);
        Permission::create(['name' => 'user:update']);
        Permission::create(['name' => 'user:delete']);
        Permission::create(['name' => 'user:restore']);
        Permission::create(['name' => 'seller:viewAny']);
        Permission::create(['name' => 'seller:create']);

        $statsPermissions = Permission::create(['name' => 'stats:view']);

        $seller = Role::create(['name' => 'seller']);
        $seller->syncPermissions([
            Permission::create(['name' => 'order:viewAny']),
            Permission::create(['name' => 'order:view']),

            Permission::create(['name' => 'product:viewAny']),
            Permission::create(['name' => 'product:view']),
            Permission::create(['name' => 'product:create']),
            Permission::create(['name' => 'product:update']),
            Permission::create(['name' => 'product:delete']),
            Permission::create(['name' => 'product:restore']),


            Permission::create(['name' => 'category:viewAny']),
            Permission::create(['name' => 'category:view']),

            Permission::create(['name' => 'review:viewAny']),
            Permission::create(['name' => 'review:view']),
            Permission::create(['name' => 'review:create']),
            Permission::create(['name' => 'review:update']),
            Permission::create(['name' => 'review:delete']),
            Permission::create(['name' => 'review:restore']),

            Permission::create(['name' => 'discount:create']),
        ]);

        $customer = Role::create(['name' => 'customer']);
        $customer->syncPermissions([
            Permission::create(['name' => 'order:create']),
        ]);

        $role->givePermissionTo($statsPermissions);
    }
}
