@extends('layouts.app')

@section('content')
<h1>User Details</h1>

<p>ID: {{ $user->id }}</p>
<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('users.edit', $user->id) }}">Edit</a>

<form method="POST" action="{{ route('users.destroy', $user->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<a href="{{ route('users.index') }}">Back to User List</a>
@endsection