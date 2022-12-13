<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hour = date("H");
    
    if ($hour >= 18) {
        echo "Het is avond.";
    }
    elseif ($hour >= 0 && $hour <= 5) {
        echo "Het is nacht.";
    }
    elseif ($hour >= 5 && $hour <= 11) {
        echo "Het is ochtend.";
    }
    elseif ($hour >= 11 && $hour <= 18){
        echo "Het is middag.";
    }
    ?>
    
</body>
</html>