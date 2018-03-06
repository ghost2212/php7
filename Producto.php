<?php

//las  clases  son  planos  para  crear  objeto
class Producto{

var  $nombre;
var $talla;
var $precio;

function __construct($nombre,$talla,$precio){

 $this->nombre =$nombre;
 $this->talla =$talla;
 $this->precio =$precio;

}

function  resumen (){

    echo $this->nombre . PHP_EOL ;
    echo $this->talla . PHP_EOL ;
    echo $this->precio . PHP_EOL ;


}


}



?>