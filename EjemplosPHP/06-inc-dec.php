<?php include 'includes/header.php';

$num1 = 30;
$num1++;

echo $num1++; //imprime primero 31, luego le suma
echo $num1;//imprime 32

echo "<br>";

$num2 = 1;
echo --$num2; //imprime 0, resta primero y luego imprime variable

include 'includes/footer.php';