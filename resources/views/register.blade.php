@extends('layouts.app')

@section('content')
<h3>Registeration</h3>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name" value="{{old('name')}}"><br><br>
    @error('name')
    <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <input type="email" name="email" placeholder="enter email" value="{{ old('email') }}"><br><br>
    @error('email')
    <span style="color:red;">{{$message}}</span><br>
    @enderror
    <input type="password" name="password" placeholder="enter password" value="{{old('password')}}"><br><br>
    @error('password')
    <span style="color:red;">{{$message}}</span><br>
    @enderror
    <button type="submit">Register</button><br><br>
    <p>Already have An Account ? </p> <a href="/login">Login Now !</a>
</form>
@endsection