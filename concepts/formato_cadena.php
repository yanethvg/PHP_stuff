<?php
#agregar un formato
$arg1=1994;
$arg2='PHP';
$text='En %d fue creado %s';
#se coloca en orden de argumentos a llamar
echo sprintf($text,$arg1,$arg2);

#se coloca la posicion con $n y su formato
$text='En %2$s fue creado %1$d';
echo sprintf($text,$arg1,$arg2);

 ?>
