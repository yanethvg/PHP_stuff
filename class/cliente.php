<?php
require_once('persona.php');
class Client extends Person{
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
    function __destruct(){
      echo 'Limpieza';
    }

}



 ?>
