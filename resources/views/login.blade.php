<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <h3>Login form</h3>
    <hr>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
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
