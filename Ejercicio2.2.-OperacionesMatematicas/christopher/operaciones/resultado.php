<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solución</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>La solución es</h1>
    <div class="contenido">

    <?php
      $numerouno = $_POST['uno'];
      $numerodos = $_POST['dos'];
      $resto = $numerouno%$numerodos;


      echo "<div class=\"\">";
      echo "<p>El resultado de la suma " . $numerouno . " + " . $numerodos . " = " . ($numerouno + $numerodos). "</p>";
      echo "</div>";

      echo "<div class=\"\">";
      echo "<p>El resultado de la resta " . $numerouno . " - " . $numerodos . " = " .( $numerouno - $numerodos). "</p>";
      echo "</div>";

      echo "<div class=\"\">";
      echo "<p>El resultado de la multiplicación " . $numerouno . " x " . $numerodos . " = " . ($numerouno * $numerodos). "</p>";
      echo "</div>";

      if ( $resto == 0) {
        echo "<p>El resultado de la división " . $numerouno . " / " . $numerodos . " = " . ($numerouno / $numerodos). "</p>";
      }else {
        echo "<p>La división no es posible</p>";
      }



     ?>
     <div class="menu">
       <a href="index.html">Atrás</a>
     </div>

    </div>
  </body>
</html>
