<?php

$age = 18;

if($age >= 18){
  echo "Puedes ver la pelicula";
}else{
  echo "No puedes ver la pelicula";
}

#se puede omitir los corchetes si solo hay una linea de codigo
# si hay mas seguirase vera errores
if($age >= 18)
  echo "Puedes ver la pelicula";
else
  echo "No puedes ver la pelicula";

#otra menra de hacer las condicionales con dos puntos
# con dos puntos no se puede colocar else if
if($age >= 18):
  echo "Puedes ver la pelicula";
  echo "Puedes ver la pelicula";
  echo "Puedes ver la pelicula";
else:
  echo "No puedes ver la pelicula";
endif;

if($age >= 18 && $age<=30){
  echo "Puedes ver la pelicula";
}
else if($age>30){
  echo "No puedes ver la pelicula porque tu edad es mayor de 30";
}
else{
  echo "No puedes ver la pelicula es menor a 18";
}

?>
