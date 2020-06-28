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
        $password = bcrypt('testtest');

        $users = [
            ['ad' => 'test','kullanici'=>'testt', 'password' => $password, 'email' => 'test@test.com', 'yetki'=>'2'],
        ];

        DB::table('kullanicilar')->insert($users);

    }
}
