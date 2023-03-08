
    <?php
try {
    $db = new PDO('mysql:host=localhost;dbname=3dplus2', 'root', '');
}
catch(PDOexception $e) {
    die("Fout bij verbinden met database: " .$e->getMessage());
}

?>
