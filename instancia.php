<?php
require_once 'Producto.php';


$producto = new Producto('camiseta css','L',15);
$producto2 = new Producto('camiseta js','S',18);

/*$producto->nombre='camiseta css';
$producto->talla='L';
$producto->precio=12;
*/
//Acceder alas  Propiedades

$producto->resumen();
$producto2->resumen();

echo $producto->nombre;
?>