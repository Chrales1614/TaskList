<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskViewController extends Controller
{
    public function index()
    {
        // Your code to handle the request
        return view('tasks.index');
    }
}