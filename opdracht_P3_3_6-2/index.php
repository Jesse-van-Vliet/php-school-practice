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
    // // starting sesion
// session_start();
// // Every time session starts +1  (refresh starts a new session )
// $_SESSION['counter']+= 1;
// // echo's the amounts of time the session starts before the browser closes
// echo "Je hebt deze pagina nu al " . $_SESSION['counter'] . " voordat je je browser sloot<br>";
// // This sets a cookie named count and does ++ everytime the session refreshes and it will expire after 12000 seconds
// setcookie('count', ++$_COOKIE['count'], time() + (12000), "/");
// // echo's the total amount off refreshes since that number count is stored in a cookie
// echo "In totaal heb je deze pagina al : " . $_COOKIE['count'] . " keer bekeken"; 
    


    session_start();
    // checks if session['sessiontime'] is made 
    if (isset($_SESSION['sessiontime'])) {
        // $_SESSION['sessiontime'] = $_SESSION['sessiontime'] +     1
        $_SESSION['sessiontime'] += 1;
        echo "Je hebt deze pagina nu al " . $_SESSION['sessiontime'] . " bekeken voordat je je browser sloot<br>";
    } else {
        // if $_SESSION['sessiontime'] is not made is sets $_SESSION['sessiontime'] to 1
        $_SESSION['sessiontime'] = 1;
        echo "Je hebt deze pagina nu al " . $_SESSION['sessiontime'] . " bekeken voordat je je browser sloot<br>";
    }

    // Checks if $_COOKIE['count'] is set if so it will do +=1
    if (isset($_COOKIE['count'])) {
        $_COOKIE['count'] += 1;
        setcookie('count', $_COOKIE['count'], time() + 3600);
        echo "In totaal heb je deze pagina al : " . $_COOKIE['count'] . " keer bekeken";
        // if $_COOKIE['count'] is not set it will set it to value 1
    } else {
        setcookie('count', 1, time() + 3600);
        echo "In totaal heb je deze pagina al : " . $_COOKIE['count'] . " keer bekeken";
    }




    ?>




</body>

</html>