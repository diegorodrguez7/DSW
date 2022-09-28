<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Login </title>
  </head>
  <body>
    <?php

    $usuario="miguel";
    $contrasena="1234";

    if ($_POST['usu']==$usuario && $_POST['passwd']==$contrasena){
        header("location: logged.html");
    }
    elseif ($_POST['usu']==$usuario && $_POST['passwd']!=$contrasena){
      echo "La contraseña está mal <br /><a href='index.html'>Volver</a>";
    }
    elseif ($_POST['usu']!=$usuario && $_POST['passwd']==$contrasena){
      echo "El usuario está mal <br /><a href='index.html'>Volver</a>";
    }
    else {
      echo "El usuario y la contraseña están mal <br /><a href='index.html'>Volver</a>";
    }

     ?>
  </body>
</html>
