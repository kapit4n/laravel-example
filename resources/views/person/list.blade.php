<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This the page to view the Person information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <caption>User List</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persons as $person)
                    <tr>
                        <td>{{ $person->id }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>