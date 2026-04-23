@extends('layouts.app')

@section('content')

<h1>Edit Task</h1>

<form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $task->name }}">

    <textarea name="description">{{ $task->description }}</textarea>

    <select name="status">
        <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
    </select>

    <input type="date" name="due_date" value="{{ $task->due_date }}">

    <select name="project_id">
        @foreach($projects as $project)
            <option value="{{ $project->id }}"
                {{ $project->id == $task->project_id ? 'selected' : '' }}>
                {{ $project->name }}
            </option>
        @endforeach
    </select>

    <button class="btn-primary">Update</button>
</form>

@endsection
