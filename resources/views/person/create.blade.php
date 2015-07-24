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
        <form method="POST" action="/index.php/person">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Person Name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
            </div>
            <div>
                <button type="submit" class="btn btn-default">Register</button>
            </div>
        </form>
    </div>
</body>
</html>