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
        <label for="zerobtw"> Bedrag exclusief btw</label>
        <input type="text" id="zerobtw" name="zerobtw">
    </div>

    <div>
        <label for="low">laag, 9%</label>
        <input type="radio" name="btw" id="low" value="9%">
    </div>

    <div>
        <label for="high">hoog, 21%</label>
        <input type="radio" name="btw" id="high" value="21%">
    </div>

    <div>
        <input type="submit" value="submit" name="submit">
    </div>
    </form>


<?php

// function to calculate the price with btw
function calculate($btw, $zerobtw) {
   
    // if the btw is equal to 9% it will divide the price by 100 and it does it times 109
    if ($btw === "9%") {
        $inclbtw = $zerobtw / 100 * 109;
    }
    
    // else the btw value if its not 9% it will do it times 121 instead off 109
    else {
        $inclbtw = $zerobtw / 100 * 121;

    }
    // this echo will show the text once you pressed submit so you can see the price with BTW.
    echo "berdrag inclusief ". $btw . " BTW: ".  $inclbtw;

    
}

if(isset($_POST["submit"])) {
    
    // when you press on submit it will retrieve the btw value and the price without btw so it can be used in the calculate funciton.
    $btw = $_POST["btw"];
    $zerobtw = $_POST["zerobtw"];
   
    // the function calculate will activate once you press on submit
    calculate($btw, $zerobtw);
}

?>
</body>
</html>