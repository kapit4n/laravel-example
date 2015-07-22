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
        <div class="row">
            <div class="col-sm-12" style="background-color:lavender;">
                <div class="col-sm-2" >Full Name</div>
                 <div class="col-sm-10">
                    <?php echo $person->fullName ?>
                </div>
                
            </div>
            <div class="col-sm-12" style="background-color:lavenderblush; border: 1px;">
               <div class="col-sm-2" > Email </div>
                <div class="col-sm-10">
                    <?php echo $person->email ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>