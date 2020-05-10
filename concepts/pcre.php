<?php
#PCRE
#expresiones regulares que se compara de izquierda a derecha en una cadena
$texto = 'hola mundo en 123';
$regex = '/hola/';

#devuelve 1 porque encontro una coincidencia devuelve 0 si no encuentra coincidencia
#sensible a mayusculas
echo preg_match($regex,$texto);
echo "\n";

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
*/
#ejemplo con ^
$texto = 'mundo en 123 hola';
$regex = '/^hola/';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve cero porque no esta al inicio

#ejemplo con $
$texto = 'mundo en 123 hola';
$regex = '/hola$/';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve 1 porque no esta al inicio

#ejemplo con i
$texto = 'mundo en 123 hola';
$regex = '/Hola$/i';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve 1 porque no esta al inicio

#ejemplo con [] validacion con grupo
$texto = 'mundo en 123 hzla';
$regex = '/H[aiezo]la$/i';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve 1 porque no esta al inicio

#ejemplo con [] validacion con grupo
$texto = 'mundo en 123 hzla';
$regex = '/H[a-c]la$/i';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve 0 porque no esta al inicio porque no se encuentra en el rango

#ejemplo con [] validacion con grupo
$texto = 'mundo en 123 h1la';
$regex = '/H[0-9]la$/i';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve 1 porque no esta al inicio porque no se encuentra en el rango


#ejemplo con () validacion con grupo
# este entreo x o j
$texto = 'To vivo en México';
$regex = '/Mé(x|j)ico/';
echo preg_match($regex,$texto);
echo "\n";
#salida esperada devuelve 1 porque no esta al inicio porque no se encuentra en el rango

#ejemplo con []
$text = 'Los numeros son 1 4 5 6';
$regex = '/[0-9]/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve 4 Array ( [0] => Array ( [0] => 1 [1] => 4 [2] => 5 [3] => 6 ) )

#ejemplo con secuencia escapada \D
# nos ayudan a reducir las expresiones
$text = 'Los numeros son 1 4 5 6 *';
$regex = '/\D/';
#el argumento matches regresa las coincidencias que encontro en un arreglo
#funcion preg_match_all devuelve un arreglo
echo preg_match_all($regex,$text,$matches);
echo "\n";
print_r($matches);
echo "\n";
#salida esperada devuelve 19 Array ( [0] => Array ( [0] => L [1] => o [2] => s [3] => [4] => n [5] => u [6] => m [7] => e [8] => r [9] => o [10] => s [11] => [12] => s [13] => o [14] => n [15] => [16] => [17] => [18] => ) )

 ?>
