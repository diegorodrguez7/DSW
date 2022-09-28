<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="php">
    <?php
      $usuario= $_POST['usuario'];
      $contraseña= $_POST['contraseña'];
      $user= "Claudia";
      $password= "123456";

      if($usuario == $user && $contraseña == $password){
        header("location:menu.html");
      }else{
          echo "Usuario o Contraseña incorrectos<br>";
        }
      ?><a href="index.html">Volver</a>
  </div>
</body>
</html>
