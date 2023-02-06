<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replyform</title>
</head>
<body>

<?php
      session_start();
      ?>
<main>
    <h1>uw ingevulde gegevens</h1>
    <p>Let op dat niemand mee kijkt!</p>
    <?php
      if(isset($_POST["submit"])) {
           $_SESSION["firstname"] = $_POST["firstname"];
           $_SESSION["surname"] = $_POST["surname"];
           $_SESSION["gender"] = $_POST["gender"];
           $_SESSION["adress"] = $_POST["adress"];
           $_SESSION["city"] = $_POST["city"];
           $_SESSION["country"] = $_POST["country"];
           $_SESSION["email"] = $_POST["email"];
           $_SESSION["password"] = $_POST["password"];
           echo   "<p> Voornaam: " . $_POST["firstname"] . "</p>";
           echo   "<p> Achternaam " . $_POST["surname"] . "</p>";
           echo   "<p> Geslacht: " . $_POST["gender"] . "</p>";
           echo   "<p> Straat naam en huis nummer: " . $_POST["adress"] . "</p>";
           echo   "<p> Stad: " . $_POST["city"] . "</p>";
           echo   "<p> Land: " . $_POST["country"] . "</p>";
           echo   "<p> Email: " . $_POST["email"] . "</p>";
           echo   "<p> wachtwoord: " . $_POST["password"] . "</p>";
           
            }
       else {
        echo "<h2>U bent niet op de juiste manier hier gekomen</h2>";

       }
    ?>

    <form action="./index3.php">

    </div>
    <label for="submit">klopt het niet?</label>
        <input type="submit" name="submit" id="submit" value="Opnieuw">
    </form>

    </form>

    
</main>
</body>
</html>