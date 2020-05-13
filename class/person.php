<?php
/*
La clase necesita de un modificador de acceso se permite el encapsulamiento existen tres tipos public, private
** con public puede leer y escribir en los metodos y atributos de la clase
** con el private solo pueden ser usados por la misma clase
** protected solo visibilidad a la clase padre y a sus hijos
*/
 abstract class Person{
   private $name;
   private $lastName;
   private $sex;
   private $nationality;
   private $age;

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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

}

 ?>
