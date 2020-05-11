<?php

$colors = array('Rojo','Morado','Verder');
$battleShip = array(
  'A'=> array('Mar','Barco','Mar','Mar'),
  'B'=> array('Mar','Mar','Mar','Mar'),
  'C'=> array('Mar','Mar','Barco','Mar'),
  'D'=> array('Mar','Mar','Mar','Mar'),
);
$persona = array(
  "name"=> "Marines",
  "lastName" => "Mendez",
  "age" => 123
);

for ($i=0; $i < sizeof($colors); $i++) {
  echo "Indice: $i Valor: {$colors[$i]} ";
}
#salida Indice: 0 Valor: Rojo Indice: 1 Valor: Morado Indice: 2 Valor: Verder

foreach ($persona as $key => $value) {
  echo "$key: $value ";
}
#salida  name: Marines lastName: Mendez age: 123

foreach ($battleShip as $key => $value) {
  for ($i=0; $i < sizeof($value); $i++) {
     echo "Coordenadas: Fila $key Columna: $i Valor: {$value[$i]} \n";
  }
}
/*
 Coordenadas: Fila A Columna: 0 Valor: Mar Coordenadas: Fila A Columna: 1 Valor: Barco Coordenadas: Fila A Columna: 2 Valor: Mar Coordenadas: Fila A Columna: 3 Valor: Mar Coordenadas: Fila B Columna: 0 Valor: Mar Coordenadas: Fila B Columna: 1 Valor: Mar Coordenadas: Fila B Columna: 2 Valor: Mar Coordenadas: Fila B Columna: 3 Valor: Mar Coordenadas: Fila C Columna: 0 Valor: Mar Coordenadas: Fila C Columna: 1 Valor: Mar Coordenadas: Fila C Columna: 2 Valor: Barco Coordenadas: Fila C Columna: 3 Valor: Mar Coordenadas: Fila D Columna: 0 Valor: Mar Coordenadas: Fila D Columna: 1 Valor: Mar Coordenadas: Fila D Columna: 2 Valor: Mar Coordenadas: Fila D Columna: 3 Valor: Mar
*/

foreach ($battleShip as $key => $value) {
  for ($i=0; $i < sizeof($value); $i++) {
      if($battleShip[$key][$i] == 'Barco'){
        echo "Coordenadas: Fila $key Columna: $i destruir \n";
      }else{
        echo "Coordenadas: Fila $key Columna: $i \n";
      }
  }
}

 ?>
