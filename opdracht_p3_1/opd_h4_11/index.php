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
    // Final asnwer variable
    $answer = 1;
    // loop that triggers when i is smaller then number
    for ($i = 1; $i <= $number; $i++) {
        $answer = $answer * $i;
    }
    echo "De faculteit is $answer";
}


// retrieves info from form when sumbmit is pressed
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    
    loop($number);
   
}

    ?>
</body>
</html>