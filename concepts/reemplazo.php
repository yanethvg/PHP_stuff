<?php
#REEMPLAZO
#reemplazar un caracter o palabra
#sensible a mayusculas y minusculas

$search=' ';
$replace = ':';
$texto = '91 75 1A EC 9A C7';
echo str_replace($search,$replace,$texto);
#resultado 91:75:1A:EC:9A:C7
# se puede pasar un tercer argumento para conocer cuantas coincidencias existen
$search='9';
$replace = '*';
echo str_replace($search,$replace,$texto,$count);
echo $count;
 ?>
