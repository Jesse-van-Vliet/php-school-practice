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
    #1 verbinding met databse
    require "connect3dplus.php";
    
    #2 een query definieren
    try 
    {
        // $fullQuery = $db->prepare("SELECT filmnaam, regisseur FROM film WHERE filmnaam LIKE 'b%'");
        $fullQuery = $db->prepare("SELECT filmnaam, regisseur, releasejaar, duur FROM film WHERE filmnaam LIKE 'b%'"); 
    }
    catch(PDOexception $e)
    {
        die("Fout bij verbinden met database: " .$e->getMessage());
    }
    
    #3 query uitvoeren
     $fullQuery->execute();
    
    #4 checken of er een resultaat is
    // echo "aantal regels is: " . $fullQuery->rowCount();
    $result=$fullQuery->fetchall(PDO::FETCH_ASSOC);

    #5 resultaat op scherm tonen
    ?>
    <table>
        <thead>
            <th>Filmnaam</th>
            <th>regisseur</th>
            <th>Releasejaar</th>
            <th>duur</th>
            
        </thead>
        <tbody>
            <?php

            if($fullQuery->rowCount() > 0) 
            {
                
                foreach($result as $row)
                {
                    # filmnaam, regisseur, releasejaar etc moeten gelijk zijn aan de namen die gebruikt zijn in de query
                    echo "<tr><td>" . $row["filmnaam"] ."</td>";
                    echo "<td>" . $row["regisseur"] ."</td>";
                    echo "<td>" . $row["releasejaar"] ."</td>";
                    echo "<td>" . $row["duur"] ."</td></tr>";
                    
                }  
                
            }
            else 
            {
              echo  "Geen resultaten gevonden";
            }
            
            ?>
        </tbody>
    </table>


    <!-- 6 bij geen resultaat melding op scherm laten zien -->
    <!-- zie else bij de bovenstaande if else statement -->
    
</body>
</html>