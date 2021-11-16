<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        //product
        Permission::create(['name' => 'create product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);
        Permission::create(['name' => 'publish product']);
        //account
        Permission::create(['name' => 'edit information']);
        Permission::create(['name' => 'delete information']);
        //auction
        Permission::create(['name' => 'create auction']);
        Permission::create(['name' => 'edit auction']);
        Permission::create(['name' => 'delete auction']);

        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);

        $role1 = Role::create(['name' => 'customer']);
        $role1->givePermissionTo('create product');
        $role1->givePermissionTo('edit product');
        $role1->givePermissionTo('delete product');
        $role1->givePermissionTo('publish product');
        $role1->givePermissionTo('edit information');
        $role1->givePermissionTo('delete information');
        $role1->givePermissionTo('create auction');
        $role1->givePermissionTo('edit auction');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('create category');
        $role2->givePermissionTo('edit category');
        $role2->givePermissionTo('delete category');

        $role3 = Role::create(['name' => 'Super-Admin']);


        $user = User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'phone' => '0946200078',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role1);
    }
}
