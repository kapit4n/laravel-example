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
        <dl class="dl-horizontal">
            <dt>Full Name</dt>
            <dd><?php echo $person->fullName ?></dd>
            <dt>Email</dt>
            <dd><?php echo $person->email ?></dd>
        </dl>
    </div>
</body>
</html>