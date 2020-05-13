<?php
trait Operation{
  function plus($num1,$num2){
    return $num1+$num2;
  }
  function minus($num1,$num2){
    return $num1-$num2;
  }
  function divide($num1,$num2){
    return $num1/$num2;
  }
  function multi($num1,$num2){
    return $num1*$num2;
  }
}

?>
