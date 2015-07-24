<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>new person</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form role="form"  method="POST" action="/auth/register">
            
            <div class="form-group">
                Name
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                Email
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                Password
                <input class="form-control" type="password" name="password">
            </div>

            <div class="form-group">
                Confirm Password
                <input class="form-control" type="password" name="password_confirmation">
            </div>

            <div>
                <button type="submit" class="btn btn-default">Register</button>
            </div>
        </form>
    </div>
</body>
</html>