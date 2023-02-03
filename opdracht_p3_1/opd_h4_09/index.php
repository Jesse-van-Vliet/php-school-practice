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
        <label>Zijde 1 (cm)</label>
        <input type="number" name="side1" id="side1">
</div>

<div>
        <label>Zijde 2 (cm)</label>
        <input type="number" name="side2" id="side2">
</div>

<div>
        <label>Zijde 3 (cm)</label>
        <input type="number" name="side3" id="side2">
</div>

</div>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</form>
    

<?php

// function to check if making a triangle is possible 
function triangle($side1, $side2, $side3) {
    // checks if side 1 is equil to side 2
    // if so it will echo
    if($side1 === $side2) {
        echo "zijde 1: " . $side1 ."cm <br>";
        echo "zijde 2: " . $side2 ."cm <br>";
        echo "zijde 3: " . $side3 ."cm <br>";
        echo "kan wel";
    }
    // if not it will echo this
    else {
        echo "zijde 1: " . $side1. "cm <br>";
        echo "zijde 2: " . $side2 ."cm <br>";
        echo "zijde 3: " . $side3 ."cm <br>";
        echo "kan niet";
    }

}

if(isset($_POST['submit'])) {
    // retrieves the info from the form
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];
    // activates the function whe submit is pressed
    triangle($side1, $side2, $side3);
    
}

?>
</body>
</html>