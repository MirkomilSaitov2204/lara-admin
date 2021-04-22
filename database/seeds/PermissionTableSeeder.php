<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $permissions_user = array(
            array(
                'name' => 'users',
                'guard_name' => 'web',
                'description' => json_encode([
                    "uz" => "Userlar",
                    "ru" => "Юзеры",
                    "en" => "Users"
                ])

            )
        );
        DB::table('permissions')->insert($permissions_user);

        $permissions = array(

            array(
                'name' => 'create_users',
                'guard_name' => 'web',
                'description' => json_encode([
                    "uz" => "User Yaratish",
                    "ru" => "Создать  Юзер",
                    "en" => "Create User"
                ]),
                'parent_id' =>1

            ),
            array(
                'parent_id' => 1,
                'name' => 'edit_user',
                'guard_name' => 'web',
                'description' => json_encode([
                    "uz" => "User Taxrirlash",
                    "ru" => "Редакторват  Юзер",
                    "en" => "Edit User"
                ])

            ),
            array(
                'parent_id' => 1,
                'name' => 'delete_user',
                'guard_name' => 'web',
                'description' => json_encode([
                    "uz" => "User ochirish",
                    "ru" => "Удалить  Юзер",
                    "en" => "Ochirish User"
                ])

            ),
            array(
                'parent_id' => 1,
                'name' => 'show_user',
                'guard_name' => 'web',
                'description' => json_encode([
                    "uz" => "User korish",
                    "ru" => "Просмотер  Юзер",
                    "en" => "show User"
                ])

            ),

        );
        DB::table('permissions')->insert($permissions);
    }
}
