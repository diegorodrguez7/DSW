<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>Logueate aquí</h1>
    <div class="contenido">


    <?php
      $user = "chris";
      $password = "1234";
      $usuario = $_POST['usuario'];
      $contra = $_POST['contra'];


      if ($usuario == $user & $contra == $password) {
        header("location: ../menú/index.html");
      }elseif ($usuario !== $user & $contra == $password) {
          echo "<form action=\"../index.html\" method=\"post\">";
            echo "<p>El usuario es erroneo</p>";
          echo "</form>";
      }
      elseif ($usuario == $user & $contra !== $password) {
        echo "<form action=\"../index.html\" method=\"post\">";
        echo "<p>La contraseña es erronea</p>";
        echo "<br>";
        echo "</div>";
      }
      elseif ($usuario !== $user & $contra !== $password) {
          echo "<form action=\"../index.html\" method=\"post\">";
            echo "<p>El usuario y la contraseña son incorrectos</p>";
          echo "</form>";
      }


    ?>

    <div class="menu">
      <a href="../index.html">Atrás</a>
    </div>

    </div>
  </body>
</html>
