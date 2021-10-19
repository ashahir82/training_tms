<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMS - Edit Student</title>
</head>
<body>
    <form action="{{ url('student/update/01220123') }}" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name" value="shahir">
        <button type="submit">Update</button>
    </form>
</body>
</html>
