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
    $num1 = "20";
    $num2 = "30";

    if ($num1 >= $num2) {
        echo "Uitkomst: " . ($num1 * 2 + $num2);
    }
    
    else {
        echo "Uitkomst: " . ($num2 * 2 + $num1);
    }
    
    ?>
</body>
</html>