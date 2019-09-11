<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Task;
class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('index')->with('tasks', $tasks);
    }
}