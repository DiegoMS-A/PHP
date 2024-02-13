<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

//IF
if ($autenticado || $admin) {
    echo "Está autenticado";
} else {
    echo "No está autenticado";
}
echo "<br>";
//IF ANINADO
$cliente = [
    "nombre" => "Diego",
    "saldo" => 0,
    "informacion" => [
        "tipo" => "premium"
    ]
];
//mejor ver si tenemos resultados y luego evaluar la propiedad para que no de fallo

if (!empty($cliente)) {
    echo "El arreglo no está vacío";
    if ($cliente["saldo"] > 0) {
        echo "El cliente tiene saldo disponible";
    }
} else {
    echo "El arreglo está vacío";
}
echo "<br>";

//ELSE IF
if ($cliente["saldo"] > 0) {
    echo "El cliente tiene saldo disponible";
} else if ($cliente["informacion"]["tipo"] === "premium") {
    echo "El cliente es premium";
} else {
    echo "El cliente ni tiene saldo ni es premium";
}
echo "<br>";

//Switch
$tecnologia = "PHP";
switch ($tecnologia) {

    case "PHP";
        echo "Mucho PHP";
        break;

    default:
        echo "Algún lenguaje que no conozco";
}


include 'includes/footer.php';
