

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
  <title>Document</title>
</head>
<body>

  <div class="contain">
  <div class="wrapper">
    <div class="contacts">
        <h1>Actividad 1.13</h1>

        <ul>
          <li>Nombre: Jesús</li>
          <li>Apellidos: Lorenzo</li>
          <li><h3><a href="index.php">Volver atrás. </a></h3></li>
        </ul>
        <h3 class="hache"><a href="../../index.php">Volver al menú de ejercicios. </a></h3>          </div>
      <div class="form" id="formu">
  <?php
    /* esto es para que acepte las ñ y tildes: header('Content-Type: text/html; charset=utf-8');*/
    header('Content-Type: text/html; charset=utf-8');
    $numero1 = $_POST['num1'];
    $inter = $_POST['int'];
    $filas = $_POST['fils'];
    $columnas = $_POST['cols'];
    $numero2 = ($numero1 + $inter);
    echo "<div class='tabla'>";
    echo "<table>";
    for ($x = 1; $x <= $columnas; $x++){
        echo "<tr>";
          for ($y = 1; $y <= $filas; $y++){
            echo "<td>";
            echo $numero1;
            $numero1 = ($numero1 + $inter);
            echo "</td>";
          }
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
   ?>

 </div>
</div>

</div>

</body>
</html>
