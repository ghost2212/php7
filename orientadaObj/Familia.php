<?php
require_once 'hijo.php';

class Familia {

public function miembro(Hijo $persona ){

    echo $persona->nombre.PHP_EOL;
    echo $persona->apellido.PHP_EOL;
}

}

$persona = new Hijo('Noe','Munoz') ;
$grupo = new Familia();

$grupo->miembro($persona);
?>