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
// starting sesion
session_start();
// Every time session starts +1  (refresh starts a new session )
$_SESSION['counter']+= 1;
// echo's the amounts of time the session starts before the browser closes
echo "Je hebt deze pagina nu al " . $_SESSION['counter'] . " voordat je je browser sloot<br>";
// This sets a cookie named count and does ++ everytime the session refreshes and it will expire after 12000 seconds
setcookie('count', ++$_COOKIE['count'], time() + (12000), "/");
// echo's the total amount off refreshes since that number count is stored in a cookie
echo "In totaal heb je deze pagina al : " . $_COOKIE['count'] . " keer bekeken"; 
?>


</body>
</html>