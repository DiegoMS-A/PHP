<?php include 'includes/header.php';

//CONECTAR A BBDD CON PDO
$db = new PDO("mysql:host=localhost; dbname=bienesraices_crud", "root", "root");
$query = "SELECT titulo, imagen FROM propiedades";

/*
$propiedades = $db->query($query)->fetchObject();
var_dump($propiedades);
*/

$stmt = $db -> prepare($query);
$stmt -> execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $propiedad){
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
}

/*
echo "<pre>";
var_dump($resultado);
echo "</pre>";
*/

include 'includes/footer.php';