<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            [
                'id' => 1,
                'name' => 'default'
            ],
            [
                'id' => 2,
                'name' => 'standhouder'
            ],
            [
                'id' => 3,
                'name' => 'vrijwilliger'
            ],
            [
                'id' => 4,
                'name' => 'admin'
            ]
        ]);
    }
}
