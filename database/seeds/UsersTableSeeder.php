<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            User::create(array(
                'name' => '1',
                'email' => 'gdfgds@fsa.ru',
                'password' => '12345678',
            ));


    }
}
