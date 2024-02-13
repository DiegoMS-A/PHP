<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 40;
$num4 = "40";

var_dump($num3== $num4);
echo "<br>";
var_dump($num3=== $num4);
echo "<br>";

//-1 si izquierda es menor, 0 si es gual 1 si izquierda es menor
var_dump($num2 <=> $num3);
echo "<br>";

include 'includes/footer.php';