<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Gradsuccess',
            'phone' => '0909348438',
            'form_id' => 'null',
            'package' => 'null',
            'email' => 'admin@gradsuccess.com',
            'password' => bcrypt('Admin'),
            'account_type' => 'Admin',
        ]);
    }
}
