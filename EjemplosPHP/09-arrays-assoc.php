<?php include 'includes/header.php';
//Arreglos asociativos, parecido a Objetos

$cliente = [
    "nombre" => "Diego",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium",
        "disponible" => 100
    ]
];

echo "<pre>" .var_dump($cliente) . "</pre>";
echo "<br>";
echo $cliente["nombre"];
echo $cliente["saldo"];
echo "<br>";

echo $cliente["informacion"]["tipo"];
echo "<br>";
echo "<pre>" .var_dump($cliente["informacion"]). "</pre>";

//Añadir al array asociativo
$cliente["codigo"] = 123456;
$cliente["nombre"] = "he cambiado el nombre";
echo "<pre>" .var_dump($cliente) . "</pre>";


include 'includes/footer.php';
