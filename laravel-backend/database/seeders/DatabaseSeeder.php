<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Task::create([
            'title' => 'Sample Task',
            'description' => 'This is a sample task',
            'completed' => false,
        ]);
        Task::create([
            'title' => 'Another Task',
            'description' => 'This is another task',
            'completed' => true,
        ]);
        Task::create([
            'title' => 'Completed Task',
            'description' => 'This task has been completed',
            'completed' => true,
        ]);
        Task::create([
            'title' => 'Charles Task',
            'description' => 'Evaluating Task_List Activity',
            'completed' => false,
        ]);
    }
}
