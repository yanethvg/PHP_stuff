<?php
require_once('persona.php');
class Provider extends Person{
  private $account;
  private $bank;

  function sendProducts(){

  }
  function run(){
    echo "Proveedor corriendo";
  }
}

?>
