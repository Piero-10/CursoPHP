<?php

class OperationsArithmetic {

  public function operations($datosR, $operation="divide"){
    $numElementos = count($datosR);
    echo "cant elementos: ".$numElementos."<br>";
    $resultado='';
    switch($operation){   
      case "suma":
        //$resultado = $datosR[0] + $datosR[1] + $datosR[2] + $datosR[3];
        for($i=0; $i < $numElementos; $i++){
          $resultado += $datosR[$i];
        }
        break;
      case "resta":
        //$resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3]; 
        $resultado = $datosR[0];
        for($i=1; $i < $numElementos; $i++){
          $resultado -= $datosR[$i];
        }
        break;
      case "multiplica":  
        //$resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];     
        $resultado = $datosR[0];
        for($i=1; $i < $numElementos; $i++){
          $resultado *= $datosR[$i];
        }
        break;
      case "divide": 
        //$resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
        $resultado = $datosR[0];
        for($i=1; $i < $numElementos; $i++){
          $resultado /= $datosR[$i];
        }
        break;
      default:
        $resultado = "operacion '$operation' NO es reconocida";    
    }
    return $resultado;        
  } 
  
}

$datos = array(100,4,5);

$object = new OperationsArithmetic();
echo "El resultado es: ".$object->operations($datos, "divide");
