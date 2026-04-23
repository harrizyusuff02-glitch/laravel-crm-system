{{-- @extends('layouts.app')

@section('content')

<h1>Task List</h1>

<a href="{{ route('tasks.create') }}">
    <button class="btn-primary">Add Task</button>
    <button class="btn-primary">Edit</button>
</a>

<form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button class="btn-danger">Delete</button>
</form>

@foreach($tasks as $task)
    <div class="card">
        <p><strong>{{ $task->name }}</strong></p>
        <p>Project: {{ $task->project->name }}</p>
        <p>Status: {{ $task->status }}</p>
        <p>Due: {{ $task->due_date }}</p>
    </div>
@endforeach

@endsection --}}


@extends('layouts.app')

@section('content')

<h1>Task List</h1>

<a href="{{ route('tasks.create') }}">
    <button class="btn-primary">Add Task</button>
</a>

@foreach($tasks as $task)
    <div class="card">
        <p><strong>{{ $task->name }}</strong></p>
        <p>Project: {{ $task->project->name }}</p>
        <p>Status: {{ $task->status }}</p>
        <p>Due: {{ $task->due_date }}</p>

        <!-- EDIT -->
        <a href="{{ route('tasks.edit', $task->id) }}">
            <button class="btn-primary">Edit</button>
        </a>

        <!-- DELETE -->
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn-danger">Delete</button>
        </form>
    </div>

    @if($tasks->isEmpty())
    <p>No tasks found.</p>
    @endif

@endforeach

@endsection
