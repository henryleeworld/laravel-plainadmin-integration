<?php

namespace Database\Seeders;

use Artisan;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Artisan::call('cache:clear');
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'users_manage']);
    }
}
