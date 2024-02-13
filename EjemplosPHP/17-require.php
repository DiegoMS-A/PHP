<?php include 'includes/header2.php';
require 'funciones.php';

//require si falla, para la aplicación
//include si falla, continua la ejecución
//require_once lo incluye una vez, revisa si está incluido y si está no lo vuelve a incluir

echo "test" . "<br>";
iniciarApp();

include 'includes/footer.php';
