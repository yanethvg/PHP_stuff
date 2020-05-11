<?php
#ARRAYS
/*
Tres tipos de arrays asociativos, indexados y multidimensionales
Es un tipo de dato que puede contener mas de un valor a la vez
*/
$colors = array('Rojo','Morado','Verder');

print_r($colors);
#salida Array ( [0] => Rojo [1] => Morado [2] => Verder )

echo $colors[0]; # Rojo

#modificar uno de estos valores

$colors[1]='Azul';
print_r($colors);
#salida Array ( [0] => Rojo [1] => Azul [2] => Verder )
 ?>
