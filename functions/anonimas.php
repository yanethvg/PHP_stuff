<?php
#FUNCIONES ANONIMAS
#permiten la creacion de funciones que no tienen un nombre especifico

$operation = function(){
  echo 'Función Anonima';
};

#manejarlo desde la variable
$operation();

$operation2 = function($num1,$num2){
  return $num1+$num2;
};

#manejarlo desde la variable
echo 'El resultado es: '.$operation2(15,5);
#resultado 20
?>
