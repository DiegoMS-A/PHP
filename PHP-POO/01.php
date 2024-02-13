<?php

declare(strict_types=1);
include 'includes/header.php';

//CLASES -->> ABSTRACCIÓN

//DEFINIR CLASES
class Producto
{

    //DEFINIR ATRIBUTOS O PROPIEDADES ANTES DE PHP8
    /*
    public $nombre;
    public $precio;
    public $disponible;
    */

    //DEFINIR CONSTRUCTOR ANTES DE PHP8
    /*
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
       $this->nombre = $nombre;
       $this->precio = $precio;
       $this->disponible = $disponible;
    }*/

    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto(){
        echo "El producto es " . $this->nombre . " y su precio es de " . $this->precio; 
    }
}

//INSTANCIAR1
$producto = new Producto("Tablet", 200, true);
$producto->mostrarProducto();

//ASIGNAR VALORES 1
/*$producto->nombre = "Tablet";
$producto->precio = 200;
$producto->disponible = true;*/

//INSTANCIAR2
$producto2 = new Producto("Monitor", 400, false);
$producto2->mostrarProducto();


echo "<pre>";
echo var_dump($producto);
echo "</pre>";
echo "<pre>";
echo var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';
