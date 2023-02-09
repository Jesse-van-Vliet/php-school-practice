<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

     <!-- form to make a button -->
    <form action="" method="post">
    <div>
        <!-- input  that serves as a button -->
        <label for="submit">Krijg een random postcode</label>
        <input type="submit" value="Genereer" name="submit">
    </div>
    </form>
        <?php  
        // function to generate a random postcode
        function randomPostcode() {
            // variable that stores all my beloved letters
            $randomChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // echo the function
            echo "<p>Een willekeurige postcode is " . rand(1000,9999) . " ". substr(str_shuffle($randomChar), 0,2) . "</p>";
            
        }

        //  activates the function when submit is pressed
        if (isset($_POST["submit"])) {
            randomPostcode();
          }
        ?>
    </main>
</body>
</html>