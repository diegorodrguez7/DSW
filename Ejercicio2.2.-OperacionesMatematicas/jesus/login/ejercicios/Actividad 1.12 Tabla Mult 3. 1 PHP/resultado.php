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
        <h1>Actividad 1.12</h1>

        <ul>
          <li>Nombre: Jesús</li>
          <li>Apellidos: Lorenzo</li>
          <li><h3><a href="index.php">Volver atrás. </a></h3></li>
        </ul>
        <h3 class="hache"><a href="../">Volver al menú principal. </a></h3>
      </div>
      <div class="form">
        <?php
          /* esto es para que acepte las ñ y tildes: header('Content-Type: text/html; charset=utf-8');*/
          header('Content-Type: text/html; charset=utf-8');
          $operacion = $_POST['op1'];
          $operacion = $_POST['num1'];
          switch  ($operacion) {
            case "sum":
            echo "<h4>La suma de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 + $numero2) . "<br></h4>";
            break;

            case "rest":
            echo "<h4>La resta de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 - $numero2) . "<br></h4>";
            break;
          $numero1 = $_POST['num1'];
          for ($x = 0; $x <= 10; $x++){
            echo "La mutiplicación de $numero1 * $x es: " . $numero1 * $x . "</br>";
          }
         ?>

 </div>
</div>

</div>

</body>
</html>
