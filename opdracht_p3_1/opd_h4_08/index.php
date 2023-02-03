<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
        <label for="age">Leeftijd</label>
        <input type="number" name="age" id="age">
</div>
<div>
    <label for="pass">Heb je je stempas ontvangen?</label>
    <label for="true">ja</label>
    <input type="radio" name="pass" id="pass" value="true" >
    <label for="false">nee</label>
    <input type="radio" name="pass" id="pass" value="false">
</div>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
    <?php

function AgeCheck($age, $pass) { 
    if($age < 16) {
        echo "<p>Je mag niet voor je scooterbewijs gaan , je bent nog geen 16</p> ";
    } else {
        echo "<p>Je mag  je scooter rijbewijs doen.</p>";
    }


    if($age < 18 && $pass == "false") {
        echo "<p>Je mag niet stemmen. </p>";
    } elseif($age >= 18 && $pass == "false"){
        echo "<p>Je mag niet stemmen want je hebt geen stempass.</p>";
    }  elseif($age >= 18 && $pass == "true") {
        echo "<p>Je mag stemmen</p>";
    }
}

if(isset($_POST['submit'])) {
    $age = $_POST['age'];
    $pass = $_POST['pass'];
    AgeCheck($age, $pass);
    
}
    ?>
</body>
</html>