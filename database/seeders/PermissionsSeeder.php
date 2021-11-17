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
        Permission::create(['name' => 'create area']);
        Permission::create(['name' => 'edit area']);
        Permission::create(['name' => 'delete area']);
        Permission::create(['name' => 'viewAny area']);
        //city
        Permission::create(['name' => 'create city']);
        Permission::create(['name' => 'edit city']);
        Permission::create(['name' => 'delete city']);
        Permission::create(['name' => 'viewAny city']);
        //country
        Permission::create(['name' => 'create country']);
        Permission::create(['name' => 'edit country']);
        Permission::create(['name' => 'delete country']);
        Permission::create(['name' => 'viewAny country']);
        //product
        Permission::create(['name' => 'create product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);
        Permission::create(['name' => 'viewAny product']);
        Permission::create(['name' => 'view product']);
        //category
        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);
        Permission::create(['name' => 'viewAny category']);
        //specification
        Permission::create(['name' => 'create specification']);
        Permission::create(['name' => 'edit specification']);
        Permission::create(['name' => 'delete specification']);
        Permission::create(['name' => 'viewAny specification']);
        //auction
        Permission::create(['name' => 'create auction']);
        Permission::create(['name' => 'edit auction']);
        Permission::create(['name' => 'delete auction']);
        Permission::create(['name' => 'viewAny auction']);
        Permission::create(['name' => 'view auction']);
        //cart
        Permission::create(['name' => 'create cart']);
        Permission::create(['name' => 'edit cart']);
        Permission::create(['name' => 'viewAny cart']);
        Permission::create(['name' => 'view cart']);
        //Delivery
        Permission::create(['name' => 'create delivery']);
        Permission::create(['name' => 'edit delivery']);
        Permission::create(['name' => 'delete delivery']);
        Permission::create(['name' => 'viewAny delivery']);
        Permission::create(['name' => 'view delivery']);
        //message
        Permission::create(['name' => 'create message']);
        Permission::create(['name' => 'viewAny message']);
        //order
        Permission::create(['name' => 'create order']);
        Permission::create(['name' => 'edit order']);
        Permission::create(['name' => 'delete order']);
        Permission::create(['name' => 'viewAny order']);
        //user
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'viewAny user']);
        Permission::create(['name' => 'view user']);

        //Roles
        //Super Admin
        $role1 = Role::create(['name' => 'Super-Admin']);
        $role1->givePermissionTo('create area');
        $role1->givePermissionTo('edit area');
        $role1->givePermissionTo('delete area');
        $role1->givePermissionTo('viewAny area');
        $role1->givePermissionTo('create city');
        $role1->givePermissionTo('edit city');
        $role1->givePermissionTo('delete city');
        $role1->givePermissionTo('viewAny city');
        $role1->givePermissionTo('create country');
        $role1->givePermissionTo('edit country');
        $role1->givePermissionTo('delete country');
        $role1->givePermissionTo('viewAny country');
        $role1->givePermissionTo('edit product');
        $role1->givePermissionTo('delete product');
        $role1->givePermissionTo('viewAny product');
        $role1->givePermissionTo('create category');
        $role1->givePermissionTo('edit category');
        $role1->givePermissionTo('delete category');
        $role1->givePermissionTo('viewAny category');
        $role1->givePermissionTo('edit auction');
        $role1->givePermissionTo('delete auction');
        $role1->givePermissionTo('viewAny auction');
        $role1->givePermissionTo('viewAny cart');
        $role1->givePermissionTo('create delivery');
        $role1->givePermissionTo('edit delivery');
        $role1->givePermissionTo('delete delivery');
        $role1->givePermissionTo('viewAny delivery');
        $role1->givePermissionTo('viewAny message');
        $role1->givePermissionTo('edit order');
        $role1->givePermissionTo('delete order');
        $role1->givePermissionTo('viewAny order');
        $role1->givePermissionTo('create specification');
        $role1->givePermissionTo('edit specification');
        $role1->givePermissionTo('delete specification');
        $role1->givePermissionTo('viewAny specification');
        $role1->givePermissionTo('create user');
        $role1->givePermissionTo('edit user');
        $role1->givePermissionTo('delete user');
        $role1->givePermissionTo('viewAny user');


        //Supervisor
        $role2 = Role::create(['name' => 'supervisor']);
        $role2->givePermissionTo('create area');
        $role2->givePermissionTo('edit area');
        $role2->givePermissionTo('viewAny area');
        $role2->givePermissionTo('create city');
        $role2->givePermissionTo('edit city');
        $role2->givePermissionTo('viewAny city');
        $role2->givePermissionTo('create country');
        $role2->givePermissionTo('edit country');
        $role2->givePermissionTo('viewAny country');
        $role2->givePermissionTo('edit product');
        $role2->givePermissionTo('viewAny product');
        $role2->givePermissionTo('edit auction');
        $role2->givePermissionTo('viewAny auction');
        $role2->givePermissionTo('viewAny cart');
        $role2->givePermissionTo('create delivery');
        $role2->givePermissionTo('edit delivery');
        $role2->givePermissionTo('viewAny delivery');
        $role2->givePermissionTo('viewAny message');
        $role2->givePermissionTo('edit order');
        $role2->givePermissionTo('viewAny order');
        $role2->givePermissionTo('edit user');
        $role2->givePermissionTo('viewAny user');
        //customer
        $role3 = Role::create(['name' => 'customer']);
        $role3->givePermissionTo('create product');
        $role3->givePermissionTo('edit product');
        $role3->givePermissionTo('delete product');
        $role3->givePermissionTo('view product');
        $role3->givePermissionTo('create auction');
        $role3->givePermissionTo('edit auction');
        $role3->givePermissionTo('delete auction');
        $role3->givePermissionTo('view auction');
        $role3->givePermissionTo('edit cart');
        $role3->givePermissionTo('delet cart');
        $role3->givePermissionTo('view cart');
        $role3->givePermissionTo('viewAny delivery');
        $role3->givePermissionTo('create message');
        $role3->givePermissionTo('create order');
        $role3->givePermissionTo('edit order');
        $role3->givePermissionTo('view order');
        $role3->givePermissionTo('edit user');
        $role3->givePermissionTo('view user');

        //Delivery Company
        $role4 = Role::create(['name' => 'delivery-company']);
        $role4->givePermissionTo('view delivery');
        $role4->givePermissionTo('edit delivery');
        $role4->givePermissionTo('create message');
        $role4->givePermissionTo('edit order');
        $role4->givePermissionTo('view order');
        $role4->givePermissionTo('edit user');
        $role4->givePermissionTo('view user');
        //Visitor
        $role5 = Role::create(['name' => 'visitor']);
        $role5->givePermissionTo('viewAny product');
        $role5->givePermissionTo('viewAny auction');
        $role5->givePermissionTo('viewAny delivery');
        $role5->givePermissionTo('create message');
        $role5->givePermissionTo('create user');


        //Exampel Users //password
        $user = User::factory()->create([
            'name' => 'Example Super-Admin ',
            'email' => 'admin@example.com',
            'phone' => '0946200078',
            'birthdate' => '1999_10_02',

        ]);
        $user->assignRole($role1);

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
