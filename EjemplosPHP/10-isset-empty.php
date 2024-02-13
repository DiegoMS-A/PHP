<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = ["Pedro","Diego","María"];
$cliente = [
    "nombre" => "Diego",
    "saldo" => 100
];

//Revisa si el array esta vacío
var_dump(empty($clientes));
var_dump(empty($clientes3));
echo "<br>";

//Isset - revisa si un arreglo esta creado o una propieda está definida
var_dump(isset($clientes4));
var_dump(isset($clientes3));
var_dump(isset($clientes3));
echo "<br>";
var_dump(isset($cliente["nombre"]));
var_dump(isset($cliente["apeliido"]));
echo "<br>";


include 'includes/footer.php';