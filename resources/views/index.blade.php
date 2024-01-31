@extends('layouts.app')

@section('content')
<h1>User List</h1>

<a href="/">Add new item</a>

<table border="1">
    <thead>
        <tr>ID</tr>
        <tr>NAME</tr>
        <tr>EMAIl</tr>
        <tr>ACTIONS</tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}">View</a>
                <a href="{{route('users.edit', $user->id)}}">edit</a>
                <form action="{{route('users.destroy', $user->id)}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection