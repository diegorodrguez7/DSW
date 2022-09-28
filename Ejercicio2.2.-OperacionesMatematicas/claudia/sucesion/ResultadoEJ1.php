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

      $filas= $_POST['filas'];
      $columnas= $_POST['columnas'];
      $primero= $_POST['primero'];
      $incremento= $_POST['incremento'];

      echo "<table border='1'>";
        for ($fi=0; $fi < $filas ; $fi++) {
          echo "<tr>";
          for ($co=0; $co < $columnas ; $co++) {
            echo "<td>" . $primero . "</td>";
            $primero= ($primero + $incremento);
          }
          echo "</tr>";
        }
      echo "</table>";

    ?>
    <a href="index.html">Volver a Crear la Tabla</a><br>
    <a href="../menu.html">Volver al Menú</a>
  </div>
</body>
</html>
