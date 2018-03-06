<?php
/**Requireonce : a  diferencia del  include realiza  un  break  e   el codigo  y  si  ya  lo incluyo  ya  no  lo volvera  aleer
 * evalua  e  incluyer  el archivo especificado
 * 
 */
require_once 'index.php';

echo "\n ESTAMOS  EN EL ARCHIVO REQUIRE_once.PHP".PHP_EOL;
$resultado = retornando(28,15);

var_dump($resultado);


?>