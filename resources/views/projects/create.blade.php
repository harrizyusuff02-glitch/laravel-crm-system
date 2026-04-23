@extends('layouts.app')

@section('content')

<h1>Add Project</h1>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Project Name">

    <select name="client_id">
        @foreach($clients as $client)
            <option value="{{ $client->id }}">
                {{ $client->name }}
            </option>
        @endforeach
    </select>

    <button class="btn-primary">Save</button>
</form>

@endsection
