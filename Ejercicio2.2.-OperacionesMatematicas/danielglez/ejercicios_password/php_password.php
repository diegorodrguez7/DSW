<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>

        <?php
          error_reporting(0);
          $usuario = $_POST['p1'];
          $contraseña = $_POST['p2'];
          $user = "daniel";
          $password = "1234";

          if ($user == $usuario & $password == $contraseña){
            header('Location:menu/index_menu.html');
          }
          elseif  ($user != $usuario & $password == $contraseña){
            echo "<div>El usuario que ha ingresado es incorrecto vuelva a intentarlo</div>";
          }
          elseif ($user == $usuario & $password != $contraseña){
            echo "<div>La contraseña que ha ingresado es incorrecta vuelva a intentarlo</div>";
          }
          else{
            echo "<div>El usuario y contraseña que ha ingresado son incorrectos vuelva a intentarlo</div>";
          }

        ?>
        <a href="index_password.php"><input type="submit" name="" value="« Volver" class="mini_buttom_menu"></a>
  </body>
</html>
