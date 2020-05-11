<?php
#array asociativo
/*
se compone de clave y valor como que fuera un json
*/
$persona = array(
  "name"=> "Marines",
  "lastName" => "Mendez",
  "age" => 123
);

print_r($persona);
#salida Array ( [name] => Marines [lastName] => Mendez [age] => 123 )

echo $persona["name"];
#salida Marines

#modificando el valor a travez de la travez de la clave
$persona["lastName"] = "Gomez";

print_r($persona);
#salida Array ( [name] => Marines [lastName] => Gomez [age] => 123 )
?>
