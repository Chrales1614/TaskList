<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        // You can add other methods here if needed
        return view('tasks.index');
    }

    public function showTasks()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }
}