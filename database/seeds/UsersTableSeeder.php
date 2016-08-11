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
        \DB::table('users')->insert([
        	['name' => 'Admin 90total', 'email' => 'admin@90total.com','password' => \Hash::make('admin')],
		]);
    }
}
