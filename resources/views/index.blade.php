@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <form action="{{ asset('/store') }}" class="form-control" method="post" >
            @csrf
            <input type="text" class="col-sm-8 mr-3 ml-3 taskname" placeholder="@lang('messages.entertask')" name="taskname">
            <button type="submit" class="btn btn-primary col-sm-3" id="addtask">@lang('messages.addtask')</button>
            @include('layouts.note')
        </form>
    </div>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">@lang('messages.id') </th>
                <th scope="col">@lang('messages.name') </th>
                <th scope="col">@lang('messages.created_at') </th>
                <th scope="col">@lang('messages.updated_at') </th>
                <th scope="col">@lang('messages.action') </th>
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
                        <button class="btn btn-warning" id="edittask{{ $task->id }}">@lang('messages.edit') </button>
                        <button class="btn btn-danger" id="removetask{{ $task->id }}">@lang('messages.remove') </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
