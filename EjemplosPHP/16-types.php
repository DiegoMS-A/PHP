<?php
declare(strict_types=1);
include 'includes/header.php';


//?string retorno opcional
function usuarioAutenticado(bool $autenticado) : ?string{
   if($autenticado){
    return "Usuario autenticado";
   } else{
    return null;
   }
       
}

$usuario = usuarioAutenticado(false);

echo $usuario;


include 'includes/footer.php';
