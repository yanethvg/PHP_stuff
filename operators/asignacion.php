<?php
#asignacion

$a=15;
$b=5;

/*
$a=$a+$b;
echo $a;
#salida 20


$a+=$b;
echo $a;
#salida 20


$a**$b;
echo $a;
#salida 15

*/



#asignacion por referencia
$a = 15;
#$b = $a;
$b=&$a;

echo $a;
echo $b;

$a=20;

echo $a;
echo $b;
#salida 20 15 si se quiere que tome el valor de a se tiene que volver a asignar $b = $a;
#salida 20 20 con &
#para evitar estar haciendo asignaciones a cada momento se ocupa el &




 ?>
