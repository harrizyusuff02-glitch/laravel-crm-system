{{--
@extends('layouts.app')

@section('content')

<h1>Projects</h1>

<!-- ADD PROJECT -->
<div class="card">
    <a href="{{ route('projects.create') }}">
        <button class="btn-primary">+ Add Project</button>
    </a>
</div>

<!-- PROJECT LIST -->
@foreach($projects as $project)
    <div class="card">
        <h3>{{ $project->name }}</h3>
        <p>Client: {{ $project->client->name }}</p>

        <div style="margin-top:10px;">
            <!-- EDIT -->
            <a href="{{ route('projects.edit', $project->id) }}">
                <button class="btn-primary">Edit</button>
            </a>

            <!-- DELETE -->
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endforeach

@endsection --}}

@extends('layouts.app')

@section('content')

<h1>Projects</h1>

<div class="card">
    <a href="{{ route('projects.create') }}">
        <button class="btn-primary">+ Add Project</button>
    </a>
</div>

<table>
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Client</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->client->name }}</td>
                <td>
                    <a href="{{ route('projects.edit', $project->id) }}">
                        <button class="btn-primary">Edit</button>
                    </a>

                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No projects found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
