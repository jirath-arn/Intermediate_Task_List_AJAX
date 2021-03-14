<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'id'                => 1,
                'name'              => 'Tester',
                'email'             => 'qwerty@gmail.com',
                'email_verified_at' => null,
                'password'          => '$2y$10$5lptjOWZqOFiu.7agz3g2uUBQo0xAZKnXwtvrNZeAhNzWpPAErudS',
                'remember_token'    => null,
                'created_at'        => '2020-12-15 20:07:42',
                'updated_at'        => '2020-12-15 20:07:42',
            ],
        ];

        User::insert($users);
    }
}
