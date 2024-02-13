<?php

//METODOS ESTÁTICOS -> No hace falta instanciarse

declare(strict_types=1);
include 'includes/header.php';

class Producto
{

    public $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }


    public static function obtenerProducto(){
        echo "Obteniendo datos del producto";
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



$producto = new Producto("Tablet", 200, true, "");
echo $producto->obtenerImagenProducto();
$producto2 = new Producto("Monitor", 350, false, "monitorCurvo.jpg");
echo $producto2-> obtenerImagenProducto();
include 'includes/footer.php';
