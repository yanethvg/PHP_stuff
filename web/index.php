<?php  

session_start();
#elimina todas las sesiones
#session_destroy();
unset($_SESSION['login']);
if(isset($_SESSION['login'])){
  echo 'Bienvenido'.$_SESSION['login'];
}else{
  echo 'Sin session';
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="login_sesion.php" method="post">
      Usuario: <input type="text" name="username"></br>
      Contraseña: <input type="password" name="password"></br>
      <input type="submit" text="Guardar">
    </form>
  </body>
</html>
