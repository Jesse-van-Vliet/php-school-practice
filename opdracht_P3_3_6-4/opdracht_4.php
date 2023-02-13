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
        <form action="" method="post">

        <div>
            <label for="number">Omtrek van de cirkel</label>
            <input type="number" name="number" id="number">
        </div>

        <div>
        <input type="submit" value="Bereken de straal" name="submit">
        <input type="submit" value="Bereken de oppervlakte" name="space">
    </div>

        </form>
    

        <?php
        //    the function to calculate
        function calculation($number) {
            // pi function php
            $pi = pi();
            // will save the answer for the Ray
            $num = $number * $pi * 2;
            echo "De omtrek van de cirkel met straal " . $number . " is: " . number_format($num, 1);
        }

        function calculation2($number) {
            // pi function php
            $pi = pi();
            // this will save the number for the surface space
            $num2 = $pi * $number * $number;
            echo "<br>De oppervlakte van een cirkel met straal " . $number . " is: " . number_format($num2, 1);
        }

if (isset($_POST["submit"])) {
    
    // this will retrieve number from the form
    $number = $_POST["number"];
    // this will activate the function
    calculation($number); 
  }


  if (isset($_POST["space"])) {
    
    // this will retrieve number from the form
    $number = $_POST["number"];
    // this will activate the function
    calculation2($number); 
  }
        ?>
    </main>
</body>
</html>