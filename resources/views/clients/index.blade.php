@extends('layouts.app')

@section('content')

<h1>Clients</h1>

{{-- Error Messages --}}
@if ($errors->any())
    <div class="card" style="color:red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{{-- Add Client --}}
<div class="card">
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter client name">
        <button class="btn-primary">+ Add Client</button>
    </form>
</div>

{{-- Search --}}
<div class="card">
    <form method="GET" action="{{ route('clients.index') }}">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search client name">
        <button class="btn-primary">Search</button>
    </form>
</div>

<table>
    <thead>
        <tr>
            <th>Client Name</th>
            <th>Total Contacts</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->contacts->count() }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}">
                        <button class="btn-primary">Edit</button>
                    </a>

                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No clients found for this search.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
