@extends('app')

@section('content')
    <form action="{{ url('student/update/01220123') }}" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name" value="shahir">
        <button type="submit">Update</button>
    </form>
@stop
