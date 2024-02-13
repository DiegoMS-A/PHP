<?php include 'includes/header.php';


//CLASES ABSTRACTAS, NO SE PUEDEN INSTANCIAR SOLO HEREDAR

abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad  . " personas";
    }

    public function getRuedas(): int {
        return $this->ruedas;
    }

}

class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad  . " personas y no gasta gasolina";
    }
}

class Coche extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad,protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
    
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$coche = new Coche(4, 5, "Manual");
echo $coche->getInfo();
echo $coche->getTransmision();

include 'includes/footer.php';