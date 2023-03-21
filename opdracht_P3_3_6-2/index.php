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
        // does +1 to cookie
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