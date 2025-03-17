<?php

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/show', [TaskController::class, 'showTasks']);