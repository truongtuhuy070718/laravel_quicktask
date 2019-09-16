<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index')->with('tasks', $tasks);
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->taskname;
        $task->save();
        return back()->with('success', 'Create Task Successfully!!');
    }
}

