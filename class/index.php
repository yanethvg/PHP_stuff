<?php
/*
existen cuatro maneras para especificar la ruta
-->require hace obligatorio el archivo require('persona.php'); manda error si no se encuentra
-->include si no encuentra dicho archivo solamente lanza un warning y sigue la ejecucion include('persona.php');
-->require_once impide la carga del mismo archivo mas de una vez y funciona igual que el anterior
-->include_once impide la carga del mismo archivo mas de una vez
*/
/*
Type hinting Determinacion de Tipo
Organizar mejor el codigo

Namespace
Contenedor del codigo, funciones y clases se queden en un ambito restringido
Clases anonimas no se declara un nombre funcionan igual que todas las Clases
definir una clase anonima dentro de otra anonima
*/
declare(strict_types=1);
require_once('autoload.php');
$load = new Autoloader();
$load->load();

use controller as con;
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
$luis = new con\Client();
#$luis->correo="luis@gmail.com";
#echo $luis->correo;
#$luis->setCorreo("luis@gmail.com");
#echo $luis->getCorreo();
#$luis->eat();
$luis->run();
$luis->setName('Luis');
$luis->pay();
echo $luis->plus(8,8);


#creqando una instancia de Empleado
$gael = new Emplotee();
$gael->setName('Gael');
$gael->run();

#probando el type hiting
$luis->say($gael);


$rosa = new con\Provider();
$gael->setName('Rosa');
$rosa->run();



#llamar a la variable de clase
Person::$color;
#si se quiere escribir en la variables
Person::$color='Azul';
 ?>
