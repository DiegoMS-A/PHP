<?php include 'includes/header.php';

//Declaración
$carrito = [];
$carrito2 = array();
$carrito = ["Tablet", "PC", "Portatil"];

//Con etiqueta pre formatea la salida y ver los elementos del array
echo "<pre>";
echo var_dump($carrito);
echo "</pre>";
echo $carrito[1];

//Agregar en array por posición
$carrito[3] = "nuevo producto";

//Agregar en array al final
array_push($carrito, "movil");
echo "<pre>";
echo var_dump($carrito);
echo "</pre>";

//Agregar en array al principio
array_unshift($carrito, "auriculares");
echo "<pre>";
echo var_dump($carrito);
echo "</pre>";

$clientes = array("cliente1", "cliente2", "cliente3");
echo "<pre>";
echo var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';