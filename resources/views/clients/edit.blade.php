@extends('layouts.app')

@section('content')

<h1>Edit Client</h1>

<form method="POST" action="{{ route('clients.update', $client->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $client->name }}">

    <button class="btn-primary">Update</button>
</form>

@endsection
