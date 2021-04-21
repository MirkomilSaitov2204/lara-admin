<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roles = array(
           array(
               'name' => 'admin',
               'guard_name' => 'web',
               'description' => json_encode([
                   "uz"=>"Administrator",
                   "ru"=>"дминистратор",
                   "en"=>"Administrator"
               ])

           ),
           array(
               'name' => 'editor',
               'guard_name' => 'web',
               'description' => json_encode([
                   "uz"=>"Taxrirlovchi",
                   "ru"=>"Редактор",
                   "en"=>"Editor"
               ])

           ),
           array(
               'name' => 'engineer',
               'guard_name' => 'web',
               'description' => json_encode([
                   "uz"=>"Muhandis",
                   "ru"=>"Енжинер",
                   "en"=>"Engineer"
               ]),

           ),
           array(
               'name' => 'salas-manager',
               'guard_name' => 'web',
               'description' => json_encode([
                   "uz"=>"Sotuvchi",
                   "ru"=>"Продовец",
                   "en"=>"Salas Manager"
               ])

           )
       );
        DB::table('roles')->insert($roles);
    }
}
