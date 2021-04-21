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
        factory(User::class, '50')->create();
    }
}
