<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMS - Create Student</title>
</head>
<body>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name">
        <input type="text" name="url" value="{{ route('student.store') }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
