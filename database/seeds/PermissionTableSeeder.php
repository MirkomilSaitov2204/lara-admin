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
                "uz" => "Userlar",
                "ru" => "Юзеры",
                "en" => "Users"
            ]
        ]);

        $permissions_user_create = Permission::create([
            'parent_id' => 1,
            'name' => 'user_create',
            'guard_name' => 'web',
            'description' => [
                "uz" => "Userlar Yaratish",
                "ru" => "Ползавител Cоздат",
                "en" => "Users Create"
            ]
        ]);

        $permissions_user_update = Permission::create([
            'parent_id' => 1,
            'name' => 'user_update',
            'guard_name' => 'web',
            'description' => [
                "uz" => "Userlar Yaratish",
                "ru" => "Ползавител Cоздат",
                "en" => "Users Create"
            ]
        ]);

        $permissions_user_delete = Permission::create([
            'parent_id' => 1,
            'name' => 'user_delete',
            'guard_name' => 'web',
            'description' => [
                "uz" => "Userlar Yaratish",
                "ru" => "Ползавител Cоздат",
                "en" => "Users Create"
            ]
        ]);

        $permissions_user_show = Permission::create([
            'parent_id' => 1,
            'name' => 'user_show',
            'guard_name' => 'web',
            'description' => [
                "uz" => "Userlar Yaratish",
                "ru" => "Ползавител Cоздат",
                "en" => "Users Create"
            ]
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo($permissions_user);
        $roleAdmin->givePermissionTo($permissions_user_create);
        $roleAdmin->givePermissionTo($permissions_user_update);
        $roleAdmin->givePermissionTo($permissions_user_delete);
        $roleAdmin->givePermissionTo($permissions_user_show);


    }
}
