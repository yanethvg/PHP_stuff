<?php
#buscar texto en una cadena
#esta funcion devuelve la posicion del caracter a buscar
# es sencible a mayusculas y minusclas
$myString = 'Bienvenido al mundo de la programacion';
#en la posicion 26 comienza la palabra programacion
#posicion de la primera coincidencia que encuentre
$findme = 'programacion';
# posicion 11 la primera a que encuentra
$findme='a';

echo strpos($myString,$findme);
#la posicion 24
#poniendo la funcion donde va a comenzar a buscar
echo strpos($myString,$findme,12);
?>
