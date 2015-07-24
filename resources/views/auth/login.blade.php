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
        <form method="POST" action="login" class="form-signin">
            {!! csrf_field() !!}
            <h2 class="form-signin-heading">Please sign in</h2>
            <div class="form-group">
                <label class="sr-only" for="email">Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }} " placeholder="Email address">
            </div>

            <div class="form-group">
                <label class="sr-only" for="pwd">Password:</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
            </div>

            <div class="checkbox">
                <input type="checkbox" name="remember"> Remember Me
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sing In</button>
            </div>
        </form>
    </div>
</body>
</html>