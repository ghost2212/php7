<?php
require_once 'Papa.php';

class Hijo extends Papa{

function __construct($nombre,$apellido){
 $this->nombre=$nombre.PHP_EOL;
  $this->apellido=$apellido;
}

public function saludarpro(){

    echo $this->protegido;
}
public function saludarprv(){

    echo $this->secreto;
}

}




?>