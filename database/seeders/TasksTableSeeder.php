<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'id'          => 1,
                'user_id'     => 1,
                'description' => 'Task 1',
                'created_at'  => '2020-12-15 20:07:42',
                'updated_at'  => '2020-12-15 20:07:42',
            ],
            [
                'id'          => 2,
                'user_id'     => 1,
                'description' => 'Task 2',
                'created_at'  => '2020-12-15 20:08:42',
                'updated_at'  => '2020-12-15 20:08:42',
            ],
            [
                'id'          => 3,
                'user_id'     => 1,
                'description' => 'Task 3',
                'created_at'  => '2020-12-15 20:09:42',
                'updated_at'  => '2020-12-15 20:09:42',
            ],
        ];

        Task::insert($tasks);
    }
}
