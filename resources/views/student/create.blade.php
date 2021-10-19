@extends('app')

@section('content')
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name">
        <input type="text" name="url" value="{{ route('student.store') }}">
        <button type="submit">Submit</button>
    </form>
@stop
