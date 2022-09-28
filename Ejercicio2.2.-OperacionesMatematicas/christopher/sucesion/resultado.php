<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>La solución es</h1>
    <div class="contenido">

    <?php
      $incremento = $_POST['incre'];
      $primero = $_POST['primer'];
      $fila = $_POST['fil'];
      $columna = $_POST['colum'];
      echo "<div class='contenido2'>";
      echo "<table border='1px' width='50%'>";
        for ($num1=1; $num1<=$fila ; $num1++) {
          echo "<tr>";
            for ($num=1; $num <= $columna ; $num++) {
              echo "<td>" .$primero. "</td>";
              $primero=($primero+$incremento);
            }
          echo "</tr>";
        }
      echo "</table>";
      echo "</div>";
    ?>

    <div class="menu">
      <a href="index.html">Atrás</a>
    </div>

  </div>
  </body>
</html>
