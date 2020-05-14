<?php
$user='yaneth';
$password='1234';

session_start();
if($_POST['username']==$user && $_POST['password']==$password){
  $_SESSION['login']='Adminitrador';
  header('Location: index.php');
}else{
  echo 'Usuario y contraseña incorrectos';
}


?>
