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
            <label for="number1">Getal 1:</label>
            <input type="number" name="number1" id="number1">
        </div>
        <div>
            <label for="number2">Getal 2:</label>
            <input type="number" name="number2" id="number2">
        </div>
        
        
        <div>
            <label for="subtract">Aftreken</label>
            <input type="radio" name="operation" id="subtract" value="-">
        </div>
        
        <div>
            <label for="addition">Optellen</label>
            <input type="radio" name="operation" id="addition" value="+">
        </div>

        <div>
            <label for="multiply">Vermeningvuldigen</label>
            <input type="radio" name="operation" id="multiply" value="*">
        </div>

        <div>
            <label for="division">Delen</label>
            <input type="radio" name="operation" id="division" value="/">
        </div>

        <div>
        <input type="submit" value="submit" name="submit">
    </div>
    </form>

<?php
// calculation function
function calculation($number1, $number2, $operation) {
    
    // will check if operation is equal to -
    if ($operation === "-") {
        // it will do number 1 minus number 2 and save the result in answe
        $answer = $number1 - $number2;
    }
    
    // will check if operation is equal to +
    elseif ($operation === "+") {
        // it will add number 1 and 2 together and save the result in answer
        $answer = $number1 + $number2;
    }
    
    // will check if operation is equal to *
    elseif ($operation === "*") {
        // it will mutliply number 1 with number 2 and save the result in answer
        $answer = $number1 * $number2;
    }
    
    // will check if operation is equal to /
    elseif ($operation === "/") {
        // it will divide number1 with number2 and save the result in asnwer
        $answer = $number1 / $number2;
    }
    
    // this will show the equation once the operation is checked and show the answer
    echo $number1 . " " . $operation . " " . $number2 . " = " . $answer;

}
// this checks when the form is submited
  if (isset($_POST["submit"])) {
    // this will retrieve the operation from the form
   
    $operation = $_POST["operation"];
    // this will retrieve number1 from the form
    
    $number1 = $_POST["number1"];
    // this will retrieve number2 from the form
    
    $number2 = $_POST["number2"];
    // this will activate the function once the submit button is pressed
    calculation($number1, $number2, $operation); 
  }
?>
</body>
</html>