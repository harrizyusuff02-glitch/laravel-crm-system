@extends('layouts.app')

@section('content')

<h1>Edit Contact</h1>

<div class="card">
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $contact->name }}" required>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <input type="text" name="phone" value="{{ $contact->phone }}" required>

        <select name="client_id" required>
            @foreach($clients as $client)
                <option value="{{ $client->id }}"
                    {{ $client->id == $contact->client_id ? 'selected' : '' }}>
                    {{ $client->name }}
                </option>
            @endforeach
        </select>

        <button class="btn-primary">Update Contact</button>
    </form>
</div>

@endsection
