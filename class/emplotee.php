<?php
require_once('person.php');
require_once('respiracion.php');
class Emplotee extends Person implements Respiration{
  private $position;
  private $schedule;

  function cook(){

  }
  function run(){
    echo "Empleado corriendo";
  }
  public function nasalCavity(){

  }
  public function mounth(){

  }
  public function trachea(){

  }
  public function bronchi(){

  }
  public function lugs(){

  }

}


 ?>
