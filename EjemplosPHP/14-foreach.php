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

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"] ?></p>
        <p>Precio: <?php echo $producto["precio"] ?></p>
        <p><?php echo ($producto["disponible"]) ? "Disponible" : "No disponible"; ?></p>
    </li>

<?php
}

include 'includes/footer.php';
