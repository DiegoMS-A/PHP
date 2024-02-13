<?php include 'includes/header.php';

$carrito = ["Tablet", "Portatil", "Television"];

//in_array Buscar elementos en array
var_dump((in_array("Tablet", $carrito)));
echo "<br>";

//Ordenar elementos en array
$numeros = [3,5,2,1];
//Sorte de mayor a menor
sort($numeros);
echo "<pre>";
var_dump($numeros);
echo"</pre>";
//rsort de mayor a menor
rsort($numeros);
echo "<pre>";
var_dump($numeros);
echo"</pre>";


//ORDENAR ARRAY ASOCIATIVOS
$cliente = array(
    "saldo" => 200,
    "tipo" => "Premiun",
    "nombre"=> "Diego"
);
//asort ordena por values, primero numeros y luego orden alfabetico
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo"</pre>";
//arsort ordena por values, primero orden alfabetico y luego orden letras
arsort($cliente);
echo "<pre>";
var_dump($cliente);
echo"</pre>";
//ksort ordena por orden alfabetico del key A-Z
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo"</pre>";
//krsort ordena por orden alfabetico del key Z-A
krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo"</pre>";




include 'includes/footer.php';