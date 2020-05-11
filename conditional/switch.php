<?php
#switch
$shirt ='Verde';
switch ($shirt) {
  case 'Rojo':
      echo 'Encontramos tu camisa Roja';
    break;
  case 'Verde':
        echo 'Encontramos tu camisa Verde';
  break;
  case 'Amarillo':
        echo 'Encontramos tu camisa Amarillo';
  break;
  default:
    echo 'No encontramos lo que buscabas';
    break;
}

#se puede omitir los corchetes

switch ($shirt):
  case 'Rojo':
      echo 'Encontramos tu camisa Roja';
    break;
  case 'Verde':
        echo 'Encontramos tu camisa Verde';
  break;
  case 'Amarillo':
        echo 'Encontramos tu camisa Amarillo';
  break;
  default:
    echo 'No encontramos lo que buscabas';
    break;
endswitch;



?>
