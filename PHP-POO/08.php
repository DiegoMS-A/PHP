<?php include 'includes/header.php';

require 'vendor/autoload.php';

//MANEJO DE CLASES DESDE DISTINTOS ARCHIVOS, 1 CLASE POR ARCHIVOS
//require 'clases/Clientes.php';
//require 'clases/Detalles.php';

use Firebase\JWT\JWT;

class Clientes{
    public function __construct()
    {
        echo "Desde la clase de Clientes.php en 08.php";
 
    }
}

$detalles = new App\Detalles();
$clientes = new App\Clientes();
$clientes2 = new Clientes();

include 'includes/footer.php';