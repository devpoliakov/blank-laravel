<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Adminus', 'email' => 'admin@admin.com', 'password' => bcrypt('password'), 'is_admin' => 1]);

    }
}
