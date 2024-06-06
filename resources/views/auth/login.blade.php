<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Form</title>
</head>
<body>
    
    @isset($errors)
        <p style="color:red">{{ $errors->first('message') }}</p>
    @endisset

    <form name="loginform" action="/login" method="post">
        {{ csrf_field() }}
        <dl>
            <dt>MAIL ADDRESS:</dt>
            <dd><input type="text" name="email" size="35" value="{{ old('email') }}"></dd>
            <dt>PASSWORD:</dt>
            <dd><input type="password" name="password" size="35"></dd>
        </dl>
        <button type='submit' name='action' value='send'>Login</button>
    </form>
</body>
</html>