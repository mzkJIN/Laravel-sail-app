<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>

    <form id="registform" name="registform" action="/register" method="post">

        {{ csrf_field() }}

        <dl>
            <dt>NAME :</dt>
            <dd>
                <input type="text" name="name" size="35">
                <span>{{ $errors->first('name')}}</span>
            </dd>
        </dl>

        <dl>
            <dt>MAILADDRESS :</dt>
            <dd>
                <input type="text" name="email" size="35">
                <span>{{ $errors->first('email')}}</span>
            </dd>
        </dl>

        <dl>
            <dt>PASSWORD :</dt>
            <dd>
                <input type="password" name="password" size="35">
                <span>{{ $errors->first('password')}}</span>
            </dd>
        </dl>

        <dl>
            <dt>PASSWORD (Confirm):</dt>
            <dd>
                <input type="password" name="password_confirmation" size="35">
                <span>{{ $errors->first('password_confirmation')}}</span>
            </dd>
        </dl>

        <button type="submit" name="action" value="registValue">Send</button>
        
    </form>

</body>
</html>