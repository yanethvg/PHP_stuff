<?php
#DEVOLVER VALORES
#el valor devuelto es nulo si no hay return
# no se puede enviar multiples valores
# lo que se puede hacer es enviar los valores en una lista
function operation($num1,$num2){
  #$num1-$num2;
  return $num1-$num2;
}

echo var_dump(operation(15,5));

function operation2($num1,$num2){
  return array($num1-$num2,$num1+$num2,$num1/$num2);
}
list($plus,$minis,$divideBy)=operation2(15,5);
echo "La suma es: $plus, La resta es: $minis, La división es: $divideBy";
?>
