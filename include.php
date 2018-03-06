<?php
/**include : solo incluye  una  sola vez  si no marcara  error
 * evalua  e  incluyer  el archivo especificado
 * 
 */
include 'index.php';

echo "\n ESTAMOS  EN EL ARCHIVO INCLUDE.PHP".PHP_EOL;
$resultado = retornando(15,15);

var_dump($resultado);



function hello(){
echo "hola";

}

?>