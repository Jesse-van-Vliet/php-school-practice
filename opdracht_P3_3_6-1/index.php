<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// starts session
session_start();
// everytime sessions starts it does + 1
$_SESSION['counter']+= 1;
// this echo's the session counter
echo $_SESSION['counter'] . "<br>";
// $counter = $_SESSION['counter'];
// setcookie("counter", $counter , time() + 3600);
// if($counter >= $_SESSION['counter']){
//     $_COOKIE['counter'] = $counter;
// }
// echo $_COOKIE['counter'];

// ?>


</body>
</html>