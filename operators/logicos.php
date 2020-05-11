<?php
#operadores logicos
/*
operador && ambas expresiones deben ser verdaderas para resultado verdadero
operador || resultado verdadero si alguna es verdadera
operador ! not comparacion falsa
AND, OR y XOR si los dos valores son verdaderos enviara false, solo uno de los dos valores debe ser veradero
*/

$attendance =5;
$average=8;

$result = ($average >= 7 && $attendance == 6);
echo var_dump($result);
#salida bool(false)

$result = ($average >= 7 || $attendance == 6);
echo var_dump($result);
#salida bool(true)

$result = ($average >= 7 || $attendance == 6);
echo var_dump($result);
#salida bool(true)

$result = !($average >= 7);
echo var_dump($result);
#salida bool(false)


$result = ($average >= 7 xor $attendance == 6);
echo var_dump($result);
#salida bool(true)

 ?>
