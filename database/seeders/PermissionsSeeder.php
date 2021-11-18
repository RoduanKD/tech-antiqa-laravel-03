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
        //Area
        Permission::firstOrCreate(['name' => 'create area']);
        Permission::firstOrCreate(['name' => 'update area']);
        Permission::firstOrCreate(['name' => 'delete area']);
        Permission::firstOrCreate(['name' => 'viewAny area']);
        //city
        Permission::firstOrCreate(['name' => 'create city']);
        Permission::firstOrCreate(['name' => 'update city']);
        Permission::firstOrCreate(['name' => 'delete city']);
        Permission::firstOrCreate(['name' => 'viewAny city']);
        //country
        Permission::firstOrCreate(['name' => 'create country']);
        Permission::firstOrCreate(['name' => 'update country']);
        Permission::firstOrCreate(['name' => 'delete country']);
        Permission::firstOrCreate(['name' => 'viewAny country']);
        //product
        Permission::firstOrCreate(['name' => 'create product']);
        Permission::firstOrCreate(['name' => 'update product']);
        Permission::firstOrCreate(['name' => 'delete product']);
        Permission::firstOrCreate(['name' => 'viewAny product']);
        Permission::firstOrCreate(['name' => 'view product']);
        //category
        Permission::firstOrCreate(['name' => 'create category']);
        Permission::firstOrCreate(['name' => 'update category']);
        Permission::firstOrCreate(['name' => 'delete category']);
        Permission::firstOrCreate(['name' => 'viewAny category']);
        //specification
        Permission::firstOrCreate(['name' => 'create specification']);
        Permission::firstOrCreate(['name' => 'update specification']);
        Permission::firstOrCreate(['name' => 'delete specification']);
        Permission::firstOrCreate(['name' => 'viewAny specification']);
        //auction
        Permission::firstOrCreate(['name' => 'create auction']);
        Permission::firstOrCreate(['name' => 'update auction']);
        Permission::firstOrCreate(['name' => 'delete auction']);
        Permission::firstOrCreate(['name' => 'viewAny auction']);
        Permission::firstOrCreate(['name' => 'view auction']);
        //cart
        Permission::firstOrCreate(['name' => 'create cart']);
        Permission::firstOrCreate(['name' => 'update cart']);
        Permission::firstOrCreate(['name' => 'viewAny cart']);
        Permission::firstOrCreate(['name' => 'view cart']);
        Permission::firstOrCreate(['name' => 'delete cart']);

        //Delivery
        Permission::firstOrCreate(['name' => 'create delivery']);
        Permission::firstOrCreate(['name' => 'update delivery']);
        Permission::firstOrCreate(['name' => 'delete delivery']);
        Permission::firstOrCreate(['name' => 'viewAny delivery']);
        Permission::firstOrCreate(['name' => 'view delivery']);
        //message
        Permission::firstOrCreate(['name' => 'create message']);
        Permission::firstOrCreate(['name' => 'viewAny message']);
        //order
        Permission::firstOrCreate(['name' => 'create order']);
        Permission::firstOrCreate(['name' => 'update order']);
        Permission::firstOrCreate(['name' => 'delete order']);
        Permission::firstOrCreate(['name' => 'viewAny order']);
        Permission::firstOrCreate(['name' => 'view order']);

        //user
        Permission::firstOrCreate(['name' => 'create user']);
        Permission::firstOrCreate(['name' => 'update user']);
        Permission::firstOrCreate(['name' => 'delete user']);
        Permission::firstOrCreate(['name' => 'viewAny user']);
        Permission::firstOrCreate(['name' => 'view user']);

        //Roles
        //Super Admin
        $role1 = Role::firstOrCreate(['name' => 'super-admin']);
        $role1->givePermissionTo('create area');
        $role1->givePermissionTo('update area');
        $role1->givePermissionTo('delete area');
        $role1->givePermissionTo('viewAny area');
        $role1->givePermissionTo('create city');
        $role1->givePermissionTo('update city');
        $role1->givePermissionTo('delete city');
        $role1->givePermissionTo('viewAny city');
        $role1->givePermissionTo('create country');
        $role1->givePermissionTo('update country');
        $role1->givePermissionTo('delete country');
        $role1->givePermissionTo('viewAny country');
        $role1->givePermissionTo('update product');
        $role1->givePermissionTo('delete product');
        $role1->givePermissionTo('viewAny product');
        $role1->givePermissionTo('create category');
        $role1->givePermissionTo('update category');
        $role1->givePermissionTo('delete category');
        $role1->givePermissionTo('viewAny category');
        $role1->givePermissionTo('update auction');
        $role1->givePermissionTo('delete auction');
        $role1->givePermissionTo('viewAny auction');
        $role1->givePermissionTo('viewAny cart');
        $role1->givePermissionTo('create delivery');
        $role1->givePermissionTo('update delivery');
        $role1->givePermissionTo('delete delivery');
        $role1->givePermissionTo('viewAny delivery');
        $role1->givePermissionTo('viewAny message');
        $role1->givePermissionTo('update order');
        $role1->givePermissionTo('delete order');
        $role1->givePermissionTo('viewAny order');
        $role1->givePermissionTo('create specification');
        $role1->givePermissionTo('update specification');
        $role1->givePermissionTo('delete specification');
        $role1->givePermissionTo('viewAny specification');
        $role1->givePermissionTo('create user');
        $role1->givePermissionTo('update user');
        $role1->givePermissionTo('delete user');
        $role1->givePermissionTo('viewAny user');


        //Supervisor
        $role2 = Role::firstOrCreate(['name' => 'supervisor']);
        $role2->givePermissionTo('create area');
        $role2->givePermissionTo('update area');
        $role2->givePermissionTo('viewAny area');
        $role2->givePermissionTo('create city');
        $role2->givePermissionTo('update city');
        $role2->givePermissionTo('viewAny city');
        $role2->givePermissionTo('create country');
        $role2->givePermissionTo('update country');
        $role2->givePermissionTo('viewAny country');
        $role2->givePermissionTo('update product');
        $role2->givePermissionTo('viewAny product');
        $role2->givePermissionTo('update auction');
        $role2->givePermissionTo('viewAny auction');
        $role2->givePermissionTo('viewAny cart');
        $role2->givePermissionTo('create delivery');
        $role2->givePermissionTo('update delivery');
        $role2->givePermissionTo('viewAny delivery');
        $role2->givePermissionTo('viewAny message');
        $role2->givePermissionTo('update order');
        $role2->givePermissionTo('viewAny order');
        $role2->givePermissionTo('update user');
        $role2->givePermissionTo('viewAny user');
        //customer
        $role3 = Role::firstOrCreate(['name' => 'customer']);
        $role3->givePermissionTo('create product');
        $role3->givePermissionTo('update product');
        $role3->givePermissionTo('delete product');
        $role3->givePermissionTo('view product');
        $role3->givePermissionTo('create auction');
        $role3->givePermissionTo('update auction');
        $role3->givePermissionTo('delete auction');
        $role3->givePermissionTo('view auction');
        $role3->givePermissionTo('update cart');
        $role3->givePermissionTo('delete cart');
        $role3->givePermissionTo('view cart');
        $role3->givePermissionTo('viewAny delivery');
        $role3->givePermissionTo('create message');
        $role3->givePermissionTo('create order');
        $role3->givePermissionTo('update order');
        $role3->givePermissionTo('view order');
        $role3->givePermissionTo('update user');
        $role3->givePermissionTo('view user');

        //Delivery Company
        $role4 = Role::firstOrCreate(['name' => 'delivery-company']);
        $role4->givePermissionTo('view delivery');
        $role4->givePermissionTo('update delivery');
        $role4->givePermissionTo('create message');
        $role4->givePermissionTo('update order');
        $role4->givePermissionTo('view order');
        $role4->givePermissionTo('update user');
        $role4->givePermissionTo('view user');
        //Visitor
        $role5 = Role::firstOrCreate(['name' => 'visitor']);
        $role5->givePermissionTo('viewAny product');
        $role5->givePermissionTo('viewAny auction');
        $role5->givePermissionTo('viewAny delivery');
        $role5->givePermissionTo('create message');
        $role5->givePermissionTo('create user');


        //Exampel Users //password
        $user = User::factory()->create([
            'name' => 'Example super-admin ',
            'email' => 'admin@example.com',
            'phone' => '0946200078',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role1);
        User::first()->assignRole($role1);

        $user = User::factory()->create([
            'name' => 'Example Supervisor',
            'email' => 'supervisor@example.com',
            'phone' => '0946200079',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'Example Customer',
            'email' => 'customer@example.com',
            'phone' => '0946200071',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role3);

        $user = User::factory()->create([
            'name' => 'Example Delivery-Company',
            'email' => 'delivery@example.com',
            'phone' => '0946200072',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role4);

        $user = User::factory()->create([
            'name' => 'Example Visitor',
            'email' => 'visitor@example.com',
            'phone' => '0946200073',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role5);
    }
}
