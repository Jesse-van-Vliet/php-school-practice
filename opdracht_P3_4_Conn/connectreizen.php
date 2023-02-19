
    <?php
try {
    $db = new PDO('mysql:host=localhost;dbname=reizen', 'root', '');
}
catch(PDOexception $e) {
    die("Fout bij verbinden met database: " .$e->getMessage());
}

?>
