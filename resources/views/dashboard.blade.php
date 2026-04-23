@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div class="card">
    <h3>Total Clients: {{ $clients }}</h3>
</div>

<div class="card">
    <h3>Total Contacts: {{ $contacts }}</h3>
</div>

<div class="card">
    <h3>Total Projects: {{ $projects }}</h3>
</div>

<div class="card">
    <h3>Total Tasks: {{ $tasks }}</h3>
</div>



@endsection
