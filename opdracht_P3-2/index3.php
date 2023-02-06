<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main>
  <?php
      session_start();
      ?>

    <form action="index2.php" method="post">

    <div>
        <label for="Firstname">Voornaam</label>
        <input type="text" id="Firstname" name="firstname"pattern="[A-Za-z]+" value="<?php echo $_SESSION["firstname"] ?>" required />
    </div>


    <div>
        <label for="surname">Achternaam</label>
        <input type="Achternaam" id="surname" name="surname" pattern="[A-Za-z]+" value="<?php echo $_SESSION["surname"] ?>"  required />
    </div>

    <div>
        <label for="Gender">Geslacht:</label>
        <div>
            <label for="female">Vrouw</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="male">Man</label>
            <input type="radio" name="gender" id="male" value="male" checked>
            <label for="unknown">Onbekend</label>
            <input type="radio" name="gender" id="unknown" value="unknown">

        </div>

    <div>
        <label for="adress">Straat naam en huis nummer</label>
        <input type="text" id="adress" name="adress" value="<?php echo $_SESSION["adress"] ?>" required>
    </div>


    <div>
        <label for="city">Stad</label>
        <input type="text" id="city" name="city" value="<?php echo $_SESSION["city"] ?>" required>
      </div>

      <div>
        <label for="country">Land</label>
        <input type="text" name="country" id="country" class="country" value="<?php echo $_SESSION["country"] ?>" required>
      </div>


      <div>
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" value="<?php echo $_SESSION["email"] ?>" required>
          </div>
      
          <div>
        <label for="password">wachtwoord</label>
        <input type="password" id="passsword" name="password" value="<?php echo $_SESSION["password"] ?>" required />
      </div>

     

      </div>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>

  </main>
</body>
</html>