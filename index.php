<?php  declare(strict_types = 1);


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

/*php class 03 */

$polos= 0;
while($polos<=10){
echo "Tenemos $polos polos. \n ";
$polos++;
}

for($i=1;$i<=10;$i++)
{
  echo "Bucle for : Tenemos $polos polos.\t . $i . \n ";
  $polos++;
  
}
$polos= ['css','js','html','php'];

foreach($polos as $polo ){
    echo "{$polo}\n";

}
/**
 * control:  Break y continue
 */
foreach($polos as $indice => $valor ):
  
  echo "La clave [$indice]  tiene  como valor : {$valor}\n";
  break;
endforeach;


for($i=1;$i<=10;$i++)
{
  if($i%2==0):
    continue;
echo $i ."  es numero par\n";
endif;

echo $i ."  es numero impar\n";
}

/**
 * FUNCIONES
 * 
 */

function saluda(){
echo  "Hi UNC";
}

function vid($go){
  return  "Hi return ".$go."\n" ;
  
  }
saluda();
//imprime  caracter  de  fin de  linea
echo PHP_EOL;
 echo vid("Hever");

 
function bienvenido(){
//array co   todos  los  parametros
  $nombres= func_get_args();

  foreach($nombres as $nombre){
 echo "Bienvenido,{$nombre}.\n";
  }

}

bienvenido("hever","noe","muñoz","huaman");

/**
 * Especificando un array
 */
function saludando (array $persona){

  foreach($persona as $p1 ):
echo "Hola , {$p1}".PHP_EOL;
  endforeach;

}

saludando(["Diana","cameli","Mary","Tania","Lizeth"]);

/**
 * Clossure: funciones  anonimas o q  no tienen  nombre
 */

 $closs=function(){
 echo "soy  una  function anonima".PHP_EOL;
};

echo $closs();

$aritmetica=function ($c1,$c2,$c3){
 return $c1($c2,$c3).PHP_EOL;
};

$suma=function($n1,$n2){
return $n1+$n2;
};
 echo "RESULTADO  DEL CLOSURE: " .$aritmetica($suma,4,5);



 /**
  * Clase 4   :  Includes y  clases
  * 
  */

 $number = 15;

function retornando(int $x , int $y ):int{

  //global $number;
  //return  $x+$y+$number;
  return  $x+$y;
}


echo retornando(10,15);




?>