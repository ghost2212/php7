<?php  


echo "hola mundo";

var_dump(6-2+5);

/*String*/

$valor = "string de php";
$compra = "hoy compre un polo que tiene  como etiqueta";
echo "cuando usamos comillas puedo leer valores de datos {$valor}".'</br>';

var_dump($valor . $compra . 'Luego comprare unas  zapatillas');

/*Casting ...conversion de d atos */
$stringg =  '15';

$numero = (int) $stringg;

var_dump($stringg);

var_dump($numero );

$numero = (string) $numero;
var_dump($numero );

/**
 * Array son un tanto especial  para cast
 * Envuelve  un valor en array
 */

 $numero = (array) $numero;
 var_dump($numero);

 /**Operador Logico
  * False or True
  */

$a = false;
$b = true;

var_dump($a && $b);
var_dump($a and $b);

var_dump($a || $b);
var_dump($a or $b);

var_dump(!$a);

//xor solo si uno de  los dos  es  verdader
var_dump($a xor $b);

//nave espacial
var_dump(1 <=> 1);//0
var_dump(1 <=> 2);//-1
var_dump(2 <=> 1);//1

var_dump('a' <=> 'a');//0
var_dump('a' <=> 'v');//-1
var_dump('v' <=> 'a');//1


//OPerador Ternario <<< es  un  if comprimido
$curso = 'css';
var_dump(($curso == 'js')?'css3':'css-2018' );

//isset <<<<si esta definida y no es  nula

var_dump(isset($curso));//true
$curso = null;
var_dump(isset($curso));//false

var_dump(isset($curso)?"No es nulo y su valor es: $curso":'curso es  nulo');

//Variable fusion de null
var_dump($curso ?? 'es nulo');

?>