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
            <label for="number">Rempspoor in meters meter</label>
            <input type="number" name="number" id="number">
        </div>


        <div>
        <input type="submit" name="submit" id="submit" value="submit">
        </div>

    </form>


    <?php
function calculate($num) {
    // saving break delay time
 $brakedelay = 5.5;
//  saving the formula
 $v = sqrt(2 * $num * $brakedelay);
//  m/s to km/h
$km = $v * 3600 / 1000;
// echo's the answer
// numberformt rounds the $km value to zero decibels.
echo "Snelheid van een auto met remspoort van $num meter is: " . number_format($km, 0) . "km/h";


}

// submits the form
if(isset($_POST["submit"])) { 
    $num = $_POST["number"];
    calculate($num);
}
    ?>
</body>
</html>