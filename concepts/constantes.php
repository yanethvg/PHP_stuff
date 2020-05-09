<?php
#CONSTANTES
# las constantes siempre son en mayusculas
# guion bajo o caracter para iniciar
# usando la palabra clave const o define
# no se usa el signo de peso

$path = 'cursoPHP/index.php';

#const PATH1= $path;
# no se puede utilizar una variable ni una funcion en un CONST
#const PATH2=mt_rand();
# no se puede utilizar una variable ni una funcion en un CONST


echo "\n";
#FORMA BASICA DE DEFINIR
#const PATH1= 'cursoPHP/index.php';
#define('PATH2','cursoPHP/index2.php"');
#echo PATH1;
#echo PATH2;

define('PATH1',$path);
define('PATH2',mt_rand());
# en define si se puede colocar una variable y una funcion
echo PATH1,PATH2;

#regresa un arreglo por eso se ocupa print_r
# para ver la lista de constantes definidas con la funcion get_defined_constants
# no se ocupa echo o print porque no es un string devuelve un array
print_r(get_defined_constants(true));

/*
const
--> define constantes en tiempo de compilacion
-->es una construccion del lenguaje definir constante en ambito global y funcion

define
--> define constantes en tiempo de ejecucion
--> es una construccion del lenguaje definir constante en ambito global
*/


 ?>
