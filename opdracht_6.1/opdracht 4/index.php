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
            <label for="price">Prijs</label>
            <input type="number" name="price" id="price">
        </div>
        <div>
            <label for="discount">Korting (%)</label>
            <input type="number" name="discount" id="discount">
        </div>

        <div>
        <input type="submit" value="Uitrekenen" name="submit">
    </div>
    </form>

<?php
// this function is calculating the new price
function calculate($discount, $price){
    
    // price percentage is doing 100% - the discount % value
    $pricepercentage = 100 - $discount;
    
    // discountprice will calculate the new price by dividing the price by 100 times the pricepercentage
    $discountprice = $price / 100 * $pricepercentage;
    
    // this will echo the discount percentage and the new price
    // number_format is rounding the discountprice up to 2 decimals ( the 2 means the 2 decimals)
    echo "Bedrag inclusief " . $discount . "% korting: $". number_format($discountprice, 2);
}

// this whill check if the form is submited
 if (isset($_POST["submit"])) {
    
    // this will retrieve the discount % from the form 
    $discount = $_POST["discount"];
    
    // this will retrieve the price from the form
    $price = $_POST["price"];

    // when the form is submitted the function calculate will start
    calculate($discount, $price);
 }
?>
    
</body>
</html>