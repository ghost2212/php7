<?php
require_once 'hijo.php';


$hijo01 = new hijo('Diana','vallejo');

echo $hijo01->nombre;
echo $hijo01->apellido;

echo $hijo01->getSecretopublic();

echo $hijo01->saludarpro();
echo $hijo01->saludarprv();
?>