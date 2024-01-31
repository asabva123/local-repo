@extends('layouts.app')

@section('content')
<h1>Edit User</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Add your edit form fields here -->
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $user->name }}"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}"><br>

    <label for="password">Password:</label>
    <input type="password" name="password" value="{{$user->password}}"><br>

    <!-- Add other fields as needed -->

    <button type="submit">Update</button>
</form>
@endsection