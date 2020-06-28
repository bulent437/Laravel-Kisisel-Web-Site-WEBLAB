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
        $password = bcrypt('123');

        $users = [
            ['ad' => 'aa','kullanici'=>'aa', 'password' => $password, 'email' => 'a@hotmail.com', 'yetki'=>'2'],
        ];

        DB::table('kullanicilar')->insert($users);
    }
}
