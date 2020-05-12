<?php
#ARGUMENTOS DE FUNCIONES
#los argumentos son evaluados de izquierda a derecha

function divideBy($divisor,$dividendo=1){
  $result = $divisor/$dividendo;
  echo 'Resultado es: '.$result."\n";
}

divideBy(10);

divideBy(10,5);

function plus($param1,$param2){
  $param1=$param1+$param2;
  echo "El resultado de la suma es $param1 \n";
}
$arg1=20;
$arg2=5;
plus($arg1,$arg2);
echo "\n El argumento es $arg1";
# El resultado de la suma es 25 El argumento es 20

#para que sea afectado el argumento que se le manda se coloca &
function plus2(&$param1,$param2){
  $param1=$param1+$param2;
  echo "El resultado de la suma es $param1 \n";
}
$arg1=20;
$arg2=5;
plus2($arg1,$arg2);
echo "\n El argumento es $arg1";
# El resultado de la suma es 25 El argumento es 25

#FUNCIONES RECURSIVAS
#una funcion que se llama asi misma
function call($value){
  if($value<=10){
    echo "$value \n";
    call(++$value);
  }
}

call(1);
?>
