<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('12'),
            'email' => 'account1@gmail.com',
            'firstname' => 'Mai',
            'lastname' => 'Sỹ Anh',
            'type' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'viewer',
            'password' => bcrypt('12'),
            'email' => 'account2@gmail.com',
            'firstname' => 'Phạm',
            'lastname' => 'Văn Mách',
            'type' => 2
        ]);
    }
}
