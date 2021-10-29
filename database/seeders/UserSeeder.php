<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
           [
               'id' => 1,
               'name' => 'Alan Nonato',
               'telephone' => '11900000000',
               'email' => 'alan@email.com',
               'password' => Hash::make('1234'),
                'situation' => 1,
                'type' => 1
            ],
            [
                'id' => 2,
                'name' => 'Ruth Danielle',
                'telephone' => '11999990000',
                'email' => 'ruth@email.com',
                'password' => Hash::make('1234'),
                'situation' => 1,
                'type' => 1
            ],
            [
                'id' =>3,
                'name' => 'Julio Gois',
                'telephone' => '11900000000',
                'email' =>  'julio@email.com',
                'password' => Hash::make('1234'),
                'situation' => 1,
                'type' => 1
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
