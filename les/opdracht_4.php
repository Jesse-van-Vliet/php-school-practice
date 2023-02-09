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
        <input type="submit" value="submit" name="submit">
    </div>

        </form>
    

        <?php
        //    the function to calculate
        function calculation($number) {
            // will save the answer for the Ray
            $num = $number * 3.14159 * 2;
            echo "De omtrek van de cirkel met straal " . $number . " is: " . number_format($num, 1);
            // this will save the number for the surface space
            $num2 = 3.14159 * $number * $number;
            echo "<br>De oppervlakte van de cirkel met straal " . $number . " is: " . number_format($num2, 1);
        }

if (isset($_POST["submit"])) {
    
    // this will retrieve number from the form
    $number = $_POST["number"];
    // this will activate the function
    calculation($number); 
  }

        ?>
    </main>
</body>
</html>