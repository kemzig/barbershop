<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $counter = $_SESSION['counter']?? 0;
    $counter++;
    $_SESSION['counter'] = $counter;
    print_r($_COOKIE);
    //unset($_SESSION['counter']);
    echo $counter;
?>

</body>
</html>