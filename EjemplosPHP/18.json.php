<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "televisión",
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "monitor",
        "precio" => 400,
        "disponible" => false
    ]
];

echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);
$jsonArray = json_decode($json);
var_dump($jsonArray);
echo "</pre>";

include 'includes/footer.php';
