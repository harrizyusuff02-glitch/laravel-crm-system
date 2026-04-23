@extends('layouts.app')

@section('content')

<h1>Add Task</h1>

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Task name">

    <textarea name="description" placeholder="Description"></textarea>

    <select name="status">
        <option value="pending">Pending</option>
        <option value="done">Done</option>
    </select>

    <input type="date" name="due_date">

    <select name="project_id">
        @foreach($projects as $project)
            <option value="{{ $project->id }}">
                {{ $project->name }}
            </option>
        @endforeach
    </select>

    <button class="btn-primary">Save</button>
</form>

@endsection
