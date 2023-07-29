<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <h3>Registration form</h3>
    <hr>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name">
        </div><br>
        <div>
            <input type="email" name="email" placeholder="email">
        </div><br>
        <div>
            <input type="password" name="password" placeholder="password">
        </div><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
