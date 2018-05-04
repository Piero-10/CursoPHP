<?php

class OperationsArithmetic {
  
  public $nameObject = "";
  /*
  public function __construct($valor){
    $this->nameObject = $valor;
    echo "objeto $valor se creo<br/>";
  }
  function __destruct(){
    echo "Adios objeto: ".$this->nameObject."<br/>";
  }
  */
  public function __call($nameMethod, $arguments){
    echo "valor es: $arguments[2]";
    //echo "estas llamando el metodo ".$nameMethod;
    if($nameMethod=="suma"){
      $resultado = 1 + 1;
      echo "el resultado de la suma es: $resultado";
    }
    else if($nameMethod=="resta"){
      $resultado = 5 - 1;
      echo "el resultado de la resta es: $resultado";
    }
  }
  
  public function __get($namePropietary){
    echo "Tu estas intentando extraer el valor de la propiedad $namePropietary";
  }
  public function __set($namePropietary, $valor){
    echo "Estas intentado cambiar $namePropietary: $valor";
  }
  public function operations(){
  
  }  
}

//echo "1<br/>";
$object = new OperationsArithmetic(1);
//echo "2<br/>";
//$object2 = new OperationsArithmetic(2);
//$object2 = null;
//echo "mucho codigo antes<br/>";
//$object->resta(3,4,5,6);
//echo "La edad es: ".$object->edad;
$object->edad=4;
