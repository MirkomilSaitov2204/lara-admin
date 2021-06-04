<?php

use Illuminate\Database\Seeder;
use App\Domain\Permission\Entities\Permission;
use App\Domain\Role\Entities\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $permissions_user = Permission::create([
            'name' => 'users',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_user_create = Permission::create([
            'parent_id' => 1,
            'name' => 'user_create',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_user_update = Permission::create([
            'parent_id' => 1,
            'name' => 'user_update',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_user_delete = Permission::create([
            'parent_id' => 1,
            'name' => 'user_delete',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_user_show = Permission::create([
            'parent_id' => 1,
            'name' => 'user_show',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo($permissions_user);
        $roleAdmin->givePermissionTo($permissions_user_create);
        $roleAdmin->givePermissionTo($permissions_user_update);
        $roleAdmin->givePermissionTo($permissions_user_delete);
        $roleAdmin->givePermissionTo($permissions_user_show);

        //////////////////////////////////////////////////////////////////

        $permissions_permission = Permission::create([
            'name' => 'permissions',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_permission_create = Permission::create([
            'parent_id' => 1,
            'name' => 'permissions_create',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_permission_update = Permission::create([
            'parent_id' => 1,
            'name' => 'permissions_update',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_permission_delete = Permission::create([
            'parent_id' => 1,
            'name' => 'permissions_delete',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_permission_show = Permission::create([
            'parent_id' => 1,
            'name' => 'permissions_show',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo($permissions_permission);
        $roleAdmin->givePermissionTo($permissions_permission_create);
        $roleAdmin->givePermissionTo($permissions_permission_update);
        $roleAdmin->givePermissionTo($permissions_permission_delete);
        $roleAdmin->givePermissionTo($permissions_permission_show);



        //////////////////////////////////////////////////////////////////

        $permissions_role = Permission::create([
            'name' => 'roles',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_role_create = Permission::create([
            'parent_id' => 1,
            'name' => 'roles_create',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_role_update = Permission::create([
            'parent_id' => 1,
            'name' => 'roles_update',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_role_delete = Permission::create([
            'parent_id' => 1,
            'name' => 'roles_delete',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $permissions_role_show = Permission::create([
            'parent_id' => 1,
            'name' => 'roles_show',
            'guard_name' => 'web',
            'description' => [
                "uz" => "",
                "ru" => "",
                "en" => ""
            ]
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo($permissions_role);
        $roleAdmin->givePermissionTo($permissions_role_create);
        $roleAdmin->givePermissionTo($permissions_role_update);
        $roleAdmin->givePermissionTo($permissions_role_delete);
        $roleAdmin->givePermissionTo($permissions_role_show);


    }
}
