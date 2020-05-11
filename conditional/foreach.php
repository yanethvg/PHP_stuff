<?php
#foreach
#solo con arreglos

$arreglo = array('Gato','Perro','Panda');
$arreglo2 = array('Nombre' => 'Marines','Apellidos'=>'Ramirez');

#arreglos indexados
foreach ($arreglo as $valor) {
  echo "Animal es: ".$valor;
}

#arreglos asociativos
foreach ($arreglo2 as $key => $value) {
  echo "La clave es: $key y el valor es $value";
}
?>
