

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
    <div class="contacts" id="contacts2">
        <div class="sobre">
        <h1 class="hache1">Actividad 1.12</h1>
        <ul>
          <li>Nombre: Jesús</li>
          <li>Apellidos: Lorenzo</li>
          <li><h3><a href="index.php">Volver atrás. </a></h3></li>
        </ul>
        <h3 class="hache"><a href="../../../index.php">Volver al menú de ejercicios. </a></h3>          </div>
      </div>
      <div class="form" id="form2">
  <?php
    /* esto es para que acepte las ñ y tildes: header('Content-Type: text/html; charset=utf-8');*/
    header('Content-Type: text/html; charset=utf-8');
    echo "<p>";
    for ($x = 1; $x <= 10; $x++){
      echo "<p> Tabla del $x:</p>";
      for ($y = 1; $y <= 10; $y++){
      echo "La mutiplicación de $y * $x es: " . $x * $y . "</br>";
    }
    echo "</p>";

  }
   ?>

 </div>
</div>

</div>

</body>
</html>
