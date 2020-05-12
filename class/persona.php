<?php
/*
La clase necesita de un modificador de acceso se permite el encapsulamiento existen tres tipos public, private
** con public puede leer y escribir en los metodos y atributos de la clase
** con el private solo pueden ser usados por la misma clase
** protected solo visibilidad a la clase padre y a sus hijos
*/
 abstract class Person{
   public $name;
   public $lastName;
   public $sex;
   public $nationality;
   public $age;

   #variables de clase
   static $color ='rojo';
   # no se especifica el tipo de modificar de acceso por defecto es publico
   abstract function run();
   /*
   function run(){
     echo "Metodo de clase padre";
   }*/
   function see(){
     $this->sendOrder('see');
   }
   protected function talk(){
     echo "Metodo protegido por mama";
   }
   #encapsulamiento
   private function sendOrder($order){
     switch ($order) {
       case 'run':
         echo "Correr";
         break;
      case 'see':
          echo "Ver";
          break;
      case 'sleep':
          echo "Dormir";
          break;
       default:
         echo 'No se encontro la orden';
         break;
     }
   }
 }

 ?>
