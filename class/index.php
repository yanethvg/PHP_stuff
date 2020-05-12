<?php
/*
existen cuatro maneras para especificar la ruta
-->require hace obligatorio el archivo require('persona.php'); manda error si no se encuentra
-->include si no encuentra dicho archivo solamente lanza un warning y sigue la ejecucion include('persona.php');
-->require_once impide la carga del mismo archivo mas de una vez y funciona igual que el anterior
-->include_once impide la carga del mismo archivo mas de una vez
*/
declare(strict_types=1);
require_once('persona.php');
require_once('cliente.php');
require_once('empleado.php');
require_once('proveedor.php');
/*
$jose = new Person();
$jose->name='Jose';
$jose->lastName='Lopez';


$karla = new Person();
$karla->name='Karla';
$karla->lastName='Gomez';

echo $karla->name;
echo "\n";
echo $karla->see();
echo "\n";
#no se puede porque es un metodo protegido
#echo $karla->talk();
*/
#creando una instancia de cliente
$luis = new Client();
#$luis->correo="luis@gmail.com";
#echo $luis->correo;
#$luis->setCorreo("luis@gmail.com");
echo $luis->getCorreo();
$luis->eat();

#creqando una instancia de Empleado
$gael = new Emplotee();
$gael->run();



#llamar a la variable de clase
Person::$color;
#si se quiere escribir en la variables
Person::$color='Azul';
 ?>
