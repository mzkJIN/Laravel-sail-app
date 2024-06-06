<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <p>Hello!
        @if (Auth::check()) {{ \Auth::user()->name }}-san
        <a href="/logout">Logout</a>
        </p>
    @else
        guest-san</p>
        <p>
            <a href="/login">Login</a><br>
            <a href="/register">Member Registration</a>
        </p>
    @endif

</body>
</html>