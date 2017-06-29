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
        //
 DB::table('users')->insert([
            'name' => 'edgar',
            'username' => 'william',
            'email' => 'contrew@gmail.com',
            'password' => bcrypt('secret'),
            'idrol' => mt_rand(1,5),

        ]);

    }
}
