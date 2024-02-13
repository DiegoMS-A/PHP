<?php include 'includes/header.php';
//CONECTAR A BBD CON MYSQLI

$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

$query = "SELECT titulo, imagen FROM propiedades";

$stmt = $db->prepare($query);
$stmt->execute();
$stmt->bind_result($titulo, $imagen);
while($stmt->fetch()):
    var_dump($titulo);
    var_dump($imagen);
endwhile;

//$resultado = $db->query($query);
/*while($row=$resultado->fetch_assoc()):
    var_dump($row['titulo']);
endwhile;*/

include 'includes/footer.php';