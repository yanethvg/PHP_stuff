<?php

$battleShip = array(
  'A'=> array('Mar','Barco','Mar','Mar'),
  'B'=> array('Mar','Mar','Mar','Mar'),
  'C'=> array('Mar','Mar','Barco','Mar'),
  'D'=> array('Mar','Mar','Mar','Mar'),
);

print_r($battleShip);
#salida Array ( [A] => Array ( [0] => Mar [1] => Barco [2] => Mar [3] => Mar ) [B] => Array ( [0] => Mar [1] => Mar [2] => Mar [3] => Mar ) [C] => Array ( [0] => Mar [1] => Mar [2] => Barco [3] => Mar ) [D] => Array ( [0] => Mar [1] => Mar [2] => Mar [3] => Mar ) )

$coordinates = $battleShip['A'][0];
echo $coordinates;
# Salida Mar
$coordinates = $battleShip['A'][1];
echo $coordinates;
#Salida Barco

 ?>
