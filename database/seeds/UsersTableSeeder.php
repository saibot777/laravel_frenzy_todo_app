<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'stefan',
                'email' => 'stefan@gmail.com',
                'password' => bcrypt('stefan')
            ],
            [
                'name' => 'zoran',
                'email' => 'zoran@gmail.com',
                'password' => bcrypt('zoran')
            ]
        ]);
    }
}
