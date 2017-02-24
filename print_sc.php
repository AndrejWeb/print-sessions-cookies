<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Sessions & Cookies</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Sessions</h1>
    <strong>print_r</strong>
<?php echo "<pre>", print_r($_SESSION), "</pre>"; ?>
    <strong>var_dump</strong>
<?php echo "<pre>", var_dump($_SESSION), "</pre>"; ?>
    <hr/>
    <h1>Cookies</h1>
    <strong>print_r</strong>
<?php echo "<pre>", print_r($_COOKIE), "</pre>"; ?>
    <strong>var_dump</strong>
<?php echo "<pre>", var_dump($_COOKIE), "</pre>"; ?>
</div>
</body>
</html>


