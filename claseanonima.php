<?php

require_once 'Fabrica.php';


$fabrica =new Fabrica();


$mesa1 = $fabrica->fabricaMesa('Negra',21);
$mesa2 = $fabrica->fabricaMesa('Marron',8);


echo "La mesas 1 es  de  color  {$mesa1->getColor()}.\n";

?>