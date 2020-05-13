<?php
namespace controller;
require_once('person.php');
class Provider extends \Person{
  private $account;
  private $bank;

  function sendProducts(){

  }
  function run(){
    echo "Proveedor corriendo";
  }
}

?>
