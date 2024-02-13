<?php include 'includes/header.php';

//WHILE
$i = 0;
while($i < 3){
    echo $i . "<br>";
    $i++;
}

//DO WHILE, PRIMERO EJECTURA Y LUEGO REVISA CONDICIÓN
$i = 0;
do{
    echo $i . "<br>";
    $i++;
}
while($i < 3);

//FOR
for ($i=0; $i <3 ; $i++) { 
    echo $i . "<br>";
    $i++;
}

//foreach


$clientes = ["Juan", "Pedro", "Diego"];

foreach($clientes as $cliente){
    echo $cliente . "<br>";
}

for ($i=0; $i < count($clientes) ; $i++) { 
    echo $clientes[$i] . "<br>";
}

$cliente=[
    "nombre" => "Diego",
    "saldo" => 200,
    "tipo" => "premium",
];

foreach($cliente as $key => $valor){
    echo $key . " - " . $valor . "<br>";
}


include 'includes/footer.php';