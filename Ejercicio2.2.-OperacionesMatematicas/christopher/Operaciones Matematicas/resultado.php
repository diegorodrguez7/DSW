<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>Resultado</h1>

    <div class="contenido">
      <?php
        $numerouno = $_POST['uno'];
        $numerodos = $_POST['dos'];
        $simbolo = $_POST['algo'];
        switch ($simbolo) {
          case 'suma':
            echo "<p> La suma es " .($numerouno+$numerodos). "</p>";
            break;
          case 'resta':
            echo "<p> La resta es " .($numerouno-$numerodos). "</p>";
            break;
          case 'multi':
            echo "<p> La multiplicación es " .($numerouno*$numerodos). "</p>";
            break;
          case 'div':
            echo "<p> La división es " .($numerouno/$numerodos). "</p>";
            break;
        }
      ?>


    <div class="menu">
      <a href="index.html">Atrás</a>
    </div>

  </div>
  </body>
</html>
