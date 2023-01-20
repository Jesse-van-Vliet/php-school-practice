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
    <label for="tabel">Tafel van:</label>
    <input type="number" name="tabel" id="tabe;;">
</div>

    <div>
        <input type="submit" value="submit" name="submit">
    </div> 
</form>

<?php 

// function to make the tabel
function calculate($number) {
    // this sets the table border size
    echo "<table border='1' ";
    
    // this is a for loop that will run until $i is at 10
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td> x </td>";
        echo "<td>$number</td>";
        echo "<td> = </td>";
        echo "<td>" . ($i * $number) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// this checks when the form is submited
if (isset($_POST["submit"])) {
    // this will retrieve the tabel number from the form
    $number = $_POST["tabel"];
    // this will run the function once the submit button is pressed
    calculate($number);
  }
?>
</body>
</html>