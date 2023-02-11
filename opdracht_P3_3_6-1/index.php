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
// echo's the session counter 
echo "Deze pagina heb je al " . $_SESSION['counter'] . " voordat je de internet browser heb afgesloten <br>";
// ?>


</body>
</html>