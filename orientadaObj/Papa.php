<?php

  class Papa{
        //var  es  igual  public   --->  van   ser  publicas  desde  fuera
        //private --> solo  esta definido  en  funciones definidas  por  mi clase
        //protected --> nivel  intermedio  entre private  y public 
    var $nombre= 'Hever';
    var $apellido = 'Romero';
    private $secreto = 'Esto es  privado';
    protected $protegido = 'esto esta  protegido';

public function getSecretopublic(){
    return $this->secreto;

}


private function getSecretoprivado(){
    return $this->secreto;
}





  }

