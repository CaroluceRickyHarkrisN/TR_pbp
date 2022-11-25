@extends('layouts.main')
@section('container')

    <center><h1>About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    </center>
    <br><br><br><br><br><br><br><br><br><br>
@endsection
