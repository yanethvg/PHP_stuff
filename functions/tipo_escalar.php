<?php
#escalar cohersitivo y estricto
#cohersitivo
/*
function validate(int $age){
  if($age>=18){
    echo "Puede ver la pelicula";
  }else{
    echo "No puede recibir la pelicula\n";
  }
}

#validate(18);
validate('18');
*/
#para utilizar el modo estricto
# el tipo de dato a regresar :string :int
declare(strict_types=1);
function validate(int $age):string{
  if($age>=18){
    return "Puede ver la pelicula";
  }else{
    return "No puede recibir la pelicula\n";
  }
}

#validate(18);
#obliga a ingresar el tipo int
echo validate(18);

?>
