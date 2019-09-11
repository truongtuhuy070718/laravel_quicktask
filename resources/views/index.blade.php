@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <input type="text" class="col-sm-8 mr-3 ml-3 taskname" placeholder="{{ __('messages.entertask') }}" name="taskname">
        <button type="button" class="btn btn-primary col-sm-3" id="addtask">{{ __('messages.addtask') }}</button>
    </div>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{ __('messages.id') }}</th>
                <th scope="col">{{ __('messages.name') }}</th>
                <th scope="col">{{ __('messages.created_at') }}</th>
                <th scope="col">{{ __('messages.updated_at') }}</th>
                <th scope="col">{{ __('messages.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $task->created_up }}</td>
                    <td>
                        <button class="btn btn-warning" id="edittask{{ $task->id }}">{{ __('messages.edit') }}</button>
                        <button class="btn btn-danger" id="removetask{{ $task->id }}">{{ __('messages.remove') }}</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection