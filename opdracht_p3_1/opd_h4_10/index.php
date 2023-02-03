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
        <label for="number">Waarde van variable $getal is:</label>
        <input type="number" name="number" id="number">
    </div>
    
    <div>
    <input type="submit" name="submit" id="submit" value="submit">
    </div>
    </form>


    <?php

function loop($number) {
    // Final answer viarble
    $answer = 0;
    // loop that triggers if I is smaller then number
    for ($i = 1; $i <= $number; $i++) {
        if ($i < $number) {
            $answer += $i;
            echo "$i + ";
        } elseif ($i == $number) {
            $answer += $number;
            echo "$number = $answer";
        }
    }
}



if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    
    loop($number);
   
}

    ?>
</body>
</html>