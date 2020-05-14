<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name=$_POST['name'];
  $lastName=$_POST['lastName'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $sex=$_POST['sex'];

  echo "Nombre $name Apellido $lastName Dirección $address Telefono $phone Sexo $sex";
  header("location: index.php?answer=datos recibidos&name={$name}");
}else{
  $name=$_REQUEST['name'];
  $lastName=$_REQUEST['lastName'];
  $address=$_REQUEST['address'];
  $phone=$_REQUEST['phone'];
  $sex=$_REQUEST['sex'];

  echo "Request Nombre $name Apellido $lastName Dirección $address Telefono $phone Sexo $sex";
}



 ?>
