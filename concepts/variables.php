<?php
# VARIABLES
# variables comiendo con la pseudovariable de $
# se agrega el nombre de la variable
# debe comenzar con un caracter o guion bajo es un estandar
# no debe comenzar con Numero
# es sensible a mayusculas y minusculas
# no pueden contener espacios

#debilmente tipado para lenguajes como php y python
#fuertemente tipado es para lenguajes como java y c
# 9 tipos primitivos float,string,double,array,object, etc
# ambito de la variable en que la variable esta definida

$number = 13;

$rosa = 'Rosa';

$rosa = 'Color2';

function test(){
  global $rosa; # con la palabra reservada global para poder usar esa variable global
  echo $rosa;
}


test();
/*
Salida esperada ya que no se ha definido variable localmente
Notice: Undefined variable: rosa in C:\laragon\www\PHP_stuff\index.php on line 22
*/

?>
