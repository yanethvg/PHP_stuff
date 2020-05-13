<?php
#agregando el namespace
namespace controller;

require_once('person.php');
require_once('operation.php');
require_once('emplotee.php');
# se coloca \ para evitar que busque dentro de controller estas clases
class Client extends \Person{
  use \Operation;
  private $common;
  private $correo;

  function __construct()
  {
    echo 'Inicio';
    $this->common = '';
    $this->correo = 'default@gmail.com';
  }
  #metodos magicos y se manda a llamar asi despues de instanciarla $luis->correo="luis@gmail.com";
  /*
  public function __set($nameAttribute,$value){
    $this->$nameAttribute = $value;
  }
  public function __get($nameAttribute){
    return $this->$nameAttribute;
  }
*/

    public function getCommon():String
    {
        return $this->common;
    }


    public function setCommon(String $common)
    {
        $this->common = $common;
    }

    public function getCorreo():String
    {
        return $this->correo;
    }

    public function setCorreo(String $correo)
    {
        $this->correo = $correo;
    }

    function eat(){
      echo parent::talk();
    }

    function run(){
      echo "Cliente corriendo";
    }

    function say(\Emplotee $employee){
      echo "{$this->getName()} felicitame al chef {$employee->getName()}";
    }
    function __destruct(){
      echo 'Limpieza';
    }

    function pay(){
      echo 'El dinero que gaste fue: '.$this->plus(89,17);
    }

}



 ?>
