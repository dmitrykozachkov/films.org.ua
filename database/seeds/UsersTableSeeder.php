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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'dimakozachkov@gmail.com',
            'password' => bcrypt('oZneLm5A'),
            'is_admin' => true,
        ]);
    }
}
