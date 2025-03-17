<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'Complete Laravel Project',
            'description' => 'Finish the task manager application',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Learn Vue.js',
            'description' => 'Study Vue.js fundamentals for frontend development',
            'completed' => true,
        ]);

        Task::create([
            'title' => 'Buy groceries',
            'description' => 'Milk, eggs, bread, and vegetables',
            'completed' => false,
        ]);
    }
}