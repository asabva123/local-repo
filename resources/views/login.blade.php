@extends('layouts.app')

@section('content')

<h1>User Login</h1>
<form action="{{ url('user/login') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name"><br><br>
    @error('name')
    <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <input type="password" name="password" placeholder="enter passeord"><br><br>
    @error('password')
    <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <button type="submit">Login</button><br><br>
    <p>Don't Have an Account ? </p> <a href="/">Sign Up</a>
</form>
@endsection