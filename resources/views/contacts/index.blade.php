@extends('layouts.app')

@section('content')

<h1>Client Contacts</h1>

<div class="card">

    @if ($errors->any())
    <div class="card" style="background:#fee2e2;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>

        <select name="client_id" id="client_id" required>
            <option value="">-- Select Client / Company --</option>

            @foreach($clients as $client)
                <option value="{{ $client->id }}">
                    {{ $client->name }}
                </option>
            @endforeach
        </select>

        <button class="btn-primary">Add Contact</button>
    </form>
</div>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Company / Client</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->client->name }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}">
                            <button class="btn-primary">Edit</button>
                        </a>

                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>

@endsection
