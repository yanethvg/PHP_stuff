<?php
#ternario
// expresion bool ? expresion : expresion;
$age=18;

echo ($age>=18)? 'Eres mayor de edad' : 'Eres menor de edad';

#operador elvis
#este es binario ?:
echo $age?:'No hay edad';
# si no hay valor pone un defecto isset($age) cuando no existe la variable

#operador de funcion null
# este es el operador ??
echo $age??'No hay edad';


 ?>
