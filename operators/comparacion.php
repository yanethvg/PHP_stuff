<?php
/*
== Igual
=== Identico verifica que sean iguales y del mismo tipo
!= <> diferente
!== no identico verifica que no sean iguales y no del mismo tipo
>= mayor o igual question
<= menor o igual que
<=> Nave espacial nos regresa uno -uno y cero donde uno es mayor donde cero son iguales -1 es menor
*/

$age='18';

#igual
echo var_dump($age==18);
#salida bool(true)

#identico
echo var_dump($age===18);
#salida bool(false) porque son de diferente tipo

$age=17;
#diferente
echo var_dump($age!=18);
#salida bool(true)

$age='17';
#no identico
echo var_dump($age!==18);
#salida bool(true)

$age=17;
#mayor que
echo var_dump($age>= 18);
#salida bool(false)

$age=17;
#mayor que
echo var_dump($age<= 18);
#salida bool(true)

$age=17;
#nave espacial
echo var_dump($age<=>18);
#salida int(-1)



?>
