<?php

/*
-->los delimitadores son / #
--> ^ intercalacion encontrara el patron al inicio de la cadena
--> $ signo de pesos si debe coincidir el hola al final
--> se puede anular que sea sensible a mayusculas y minusculas con un metacaracter, estos se colocan despues del limitador /:
      i--> este es encargado de eliminar la sensibilidad
-->[] Para habilitar un conjunto de caracteres [] agrupador
    --> se puede especificar un rango [a-c]
-->() los parentesis para agrupar permiten crear subpatrones pequeños patrones dentro del patron original
--> secuencias de escape son un conjunto predefinido de caracteres que permiten  reducir el tamaño de las expresiones regulares
  -->\d todos los numeros
  -->\D todos menos los numeros
  -->\w todos los valores alfanumeros y numeros menos caracteres especiales
  -->\W solo se muestren los caracteres especiales
-->Metacaracteres cuantificadores :
  --> * encuentra cero o mas concurrencias del caracter que le precede
  --> + encuentra una o mas concurrencias del caracter que le precede
  --> ? encuentra cero o una concurrencia de la expresion regular que le precede
  --> {} numero determinado de caracteres especificado
*/

#ejemplo con secuencia escapada \d
$text = 'Los numeros son 1 4 5 6';
$regex = '/\d/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve 4 Array ( [0] => Array ( [0] => 1 [1] => 4 [2] => 5 [3] => 6 ) )

#ejemplo con caracteres alfanumericos
# con esta expresion el asterisco queda afuera
$text = 'Los numeros son 1 4 5 6';
$regex = '/[A-Za-z0-9_]/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve  17 Array ( [0] => Array ( [0] => L [1] => o [2] => s [3] => n [4] => u [5] => m [6] => e [7] => r [8] => o [9] => s [10] => s [11] => o [12] => n [13] => 1 [14] => 4 [15] => 5 [16] => 6 ) )

#ejemplo con caracteres alfanumericos se puede hacer con dos caracteres
# con esta expresion el asterisco queda afuera
$text = 'Los numeros son 1 4 5 6';
$regex = '/\w/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve  17 Array ( [0] => Array ( [0] => L [1] => o [2] => s [3] => n [4] => u [5] => m [6] => e [7] => r [8] => o [9] => s [10] => s [11] => o [12] => n [13] => 1 [14] => 4 [15] => 5 [16] => 6 ) )

#ejemplo con caracteres alfanumericos se puede hacer con dos caracteres
# con esta expresion el asterisco queda afuera
$text = 'Los numeros son 1 4 5 6';
$regex = '/\W/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve   6 Array ( [0] => Array ( [0] => [1] => [2] => [3] => [4] => [5] => ) )

# con esta expresion el asterisco queda afuera
# para escapar una barra invertida colocar \ escaparlo
$text = 'Los numeros son 1 4 5 6';
$regex = '/12\/01\/97/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve 0 Array ( [0] => Array ( ) )

# ejemplo con *
# va a encontrar cero o mas concurrencias de o

$text = 'hla';
$regex = '/ho*la/';
echo preg_match($regex,$text);
echo "\n";
#salida esperada devuelve 1

$text = 'hoooola';
$regex = '/ho+la/';
echo preg_match($regex,$text);
echo "\n";
#salida esperada devuelve 1

# solo valida que tenga una sola o
# si se va hla dara 1 si se manda hola tambien 1 pero si son mas o cero
$text = 'hola';
$regex = '/ho?la/';
echo preg_match($regex,$text);
echo "\n";
#salida esperada devuelve 1

# exactamente ese numero
$text = 'hoooooola';
$regex = '/ho{5}la/';
echo preg_match($regex,$text);
echo "\n";
#salida esperada devuelve 0 si son 6 o 1 si solo son 5 o

# se esta aceptando dos o mas caracteres con la coma
$text = 'leeer';
$regex = '/le{2,}r/';
echo preg_match($regex,$text);
echo "\n";
#salida esperada

# acepta de 2 a 4 el rango
$text = 'leeer';
$regex = '/le{2,4}r/';
echo preg_match($regex,$text);
echo "\n";
#salida esperada devuelve

#para validar la fecha

#echo preg_match("/[0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})/",$text);


 ?>
