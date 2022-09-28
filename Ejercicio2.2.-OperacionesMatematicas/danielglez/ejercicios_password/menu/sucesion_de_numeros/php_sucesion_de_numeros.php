<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Respuesta sucesión de números</title>
    <link href="../../../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div>
    <?php
      $filas = $_POST['s1'];
      $columnas = $_POST['s2'];
      $inicial = $_POST['s3'];
      $incremento = $_POST['s4'];


      echo "<table border='1'>";

      for ($x = 1; $x <= $filas; $x++){
          echo "<tr>";

            for ($y = 1; $y <= $columnas; $y++){
              echo "<td>".$inicial."</td>";
              $inicial= ($inicial+$incremento);

            }
          echo "</tr>";
      }

      echo "</table>";
    ?>

</div>

<a href="index_sucesion_de_numeros.php"><input type="submit" name="" value="« Volver" class="mini_buttom_menu"></a>
  </body>
</html>
