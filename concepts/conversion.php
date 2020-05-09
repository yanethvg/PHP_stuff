<?php
#conversion de tipos
# es atravez del contexto la primera
$var = 'hola';
$var = 12;

$price = 2029.50;
$age=12;
$name='holis';
$isDog=true;
# funcion para conocer el tipo de una variable gettype
echo gettype($var);
echo gettype($price);
echo gettype($name);
echo gettype($isDog);

#se coloca el tipo dentro entre parentesis
# si tenemos en price 0.0 o 0 esto marcaria false
# para conocer si tiene un dato
$price= (boolean) $price;
#forzado de tipo para tomar un tipo de dato
echo gettype($price);
# para ver el tipo y el valor de la variable
echo var_dump($price);

#FORZADO DE FUNCIONES
# funciones intval, boolval, floatval,strval
$isDog = intval($isDog);
#despliega toda la informacion
echo var_dump($isDog);

?>
