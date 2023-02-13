<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <div>
            <label for="number">Omtrek van de cirkel</label>
            <input type="number" name="number" id="number">
        </div>


        <div>
        <input type="submit" name="submit" id="submit" value="submit">
        </div>

        <div>
        <input type="submit" name="loop" id="loop" value="show loop">
        </div>

        <p></p>

    </form>


    <?php
   function five() {
    $number1 = 5;
    $result1 = $number1 * $number1 * $number1;
    echo "  $number1 " . " x " .  $number1 . " x " . $number1 . " = " . $result1 . "<br>";
   }
   five();

   
   function calculate($number2) {
    $result2 = $number2 * $number2 * $number2;
    echo "  $number2 " . " x " .  $number2 . " x " . $number2 . " = " . $result2 . "<br>";

   }


   function loop(){
    for ($x = 0; $x <= 25; $x++) {
        $result3 = $x * $x * $x;
        echo "  $x " . " x " .  $x . " x " . $x . " = " . $result3 . "<br>";
      }
   }

   

   if(isset($_POST["submit"])) { 
    $number2 = $_POST["number"];
    calculate($number2);
    

}

if(isset($_POST["loop"])) { 
    loop();
}

        ?>
</body>
</html>