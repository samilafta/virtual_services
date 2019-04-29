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

        App\User::create([
            'firstname' => 'Daniel',
            'lastname' => 'Amartey',
            'email' => 'dan@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        ]);

        \App\Customer::create([
            'firstname' => 'Peter',
            'lastname' => 'Ayambire',
            'email' => 'peter@gmail.com',
            'phone_number' => '0547576916',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),

        ]);

    }
}
