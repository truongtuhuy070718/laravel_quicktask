<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        return back()->with('success', trans('messages.create-succes'));
    }

    public function destroy($id)
    {
        try
        {
            $task = Task::findOrFail($id);
            $task->delete();
            return back()->with('success', trans('messages.destroy-success'));
        }catch(ModelNotFoundException $e) 
        {
            return back()->with('false', trans('messages.destroy-false'));
        };
        
    }
}
