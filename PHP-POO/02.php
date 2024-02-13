<?php

//CLASES -->> ENCAPSULACIÓN

declare(strict_types=1);
include 'includes/header.php';

class Producto
{

//MODIFICACDORES DE ACCESO
    // PUBLIC - ACCESIBLE Y MODIFICABLE DESDE CUALQUIER LUGAR
    // PROTECTED - ACCESIBLE Y MODIFICABLE UNICAMENTE EN LA CLASE --> GET Y SET
    // PRIVATE - SOLO MIEMBTOS DE LA MISMA CLASE PUEDEN ACCEDER

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto() : void {
        echo "El producto es " . $this->nombre . " y su precio es de " . $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    
}

$producto = new Producto("Tablet", 200, true);
$producto->setNombre("test");
echo $producto->getNombre();
$producto->mostrarProducto();



$producto2 = new Producto("Monitor", 400, false);
//$producto2->mostrarProducto();


/*
echo "<pre>";
echo var_dump($producto);
echo "</pre>";
echo "<pre>";
echo var_dump($producto2);
echo "</pre>";
*/
include 'includes/footer.php';
