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

    $price = 55;

    if ($price > 150) {
        echo "Oude prijs: $price. Na verhoging van 19% is de prijs: €" . ($price / 100 * 119);
    }

    elseif ($price >= 55 && $price <= 150) {
        echo "Oude prijs: $price. Na verhoging van 16% is de prijs: €" . ($price / 100 * 116);
    }

    elseif ($price < 55) {
        echo "Oude prijs: $price. Na verhoging van 11% is de prijs: €" . ($price / 100 * 111);
    }

    ?>



</body>
</html>