@extends('layouts.app')

@section('content')

<h1>Edit Project</h1>

<form method="POST" action="{{ route('projects.update', $project->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $project->name }}">

    <select name="client_id">
        @foreach($clients as $client)
            <option value="{{ $client->id }}"
                {{ $client->id == $project->client_id ? 'selected' : '' }}>
                {{ $client->name }}
            </option>
        @endforeach
    </select>

    <button class="btn-primary">Update</button>
</form>

@endsection
