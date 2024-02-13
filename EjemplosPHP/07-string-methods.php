<?php include 'includes/header.php';

$nombreCliente="    Diego     ";

//longitud string
echo $nombreCliente;
echo strlen($nombreCliente);
echo "<br>";

//eliminar espacios en blanco
$texto = trim($nombreCliente);
echo $texto;
echo strlen($texto);
echo "<br>";

//A mayuscula y minuscula
echo strtoupper($nombreCliente);
echo strtolower($nombreCliente);
echo "<br>";

//Comparar correos
$mail1 = "Correo@correo.com";
$mail2 = "correo@correo.com";
echo var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";

//Remplazar
$nombre = "Diego";
echo str_replace("D", "J", $nombre);
echo "<br>";

//Si existe un string;
echo strpos($nombre, "e"); //devuelve la posición de e
echo "<br>";

//Concatenar
$tipoCliente = "Premium";
echo "El cliente " .$tipoCliente. " es tipo cliente";
echo "<br>";
echo "El cliente {$tipoCliente} es tipo cliente";
echo "<br>";

include 'includes/footer.php';