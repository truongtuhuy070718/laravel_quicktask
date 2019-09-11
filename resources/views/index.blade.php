@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <input type="text" class="col-sm-8 mr-3 ml-3 taskname" placeholder="Enter new Task" name="taskname">
        <button type="button" class="btn btn-primary col-sm-3" id="addtask">Add Task</button>
    </div>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td>{{$task->name}}</td>
                    <td>{{$task->created_at}}</td>
                    <td>{{$task->created_up}}</td>
                    <td>
                        <button class="btn btn-warning" id="edittask{{$task->id}}">Edit</button>
                        <button class="btn btn-danger" id="removetask{{$task->id}}">Remove</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection