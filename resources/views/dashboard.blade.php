<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <a href="{{ route('logout') }}">Logout</a>
    <hr>
    <p>User name : {{ $data->name }}</p>
    <p>User email : {{ $data->email }}</p>
</body>
</html>
