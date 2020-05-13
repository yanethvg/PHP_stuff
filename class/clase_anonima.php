<?php
require_once 'person.php';
$anonymus=new class(10,20) extends Person
{
  #no es necesario crear una instancia para acceder a los atributos y metodos
  private $dividend;
  private $divisor;
  public function __construct($dividend,$divisor){
    $this->$dividend=$dividend;
    $this->$divisor= $divisor;
  }

  public function dividedBy(){
    $plus = $this->$dividend+$this->$divisor;
    echo 'soy la clase anonima'.$plus;
  }
};

$anonymus->dividedBy();

?>
