<?php

use Illuminate\Database\Seeder;
use App\Domain\User\Employee\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \App\Domain\Role\Entities\Role::find(1);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'first_name'=>'Mirkomil',
            'last_name' => 'Saitov',
            'dob' => '1997-22-04',
        ])->syncRoles($role);
        factory(User::class, 50)->create();
    }
}
