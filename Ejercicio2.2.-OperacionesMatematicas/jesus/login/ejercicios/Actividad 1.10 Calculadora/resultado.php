

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
        <h1>Actividad 1.10</h1>

        <ul>
          <li>Nombre: Jesús</li>
          <li>Apellidos: Lorenzo</li>
          <li><h3><a href="index.php">Volver atrás. </a></h3></li>
        </ul>
        <h3 class="hache"><a href="../../../index.php">Volver al menú de ejercicios. </a></h3>          </div>
      <div class="form">
  <?php
    /* esto es para que acepte las ñ y tildes: header('Content-Type: text/html; charset=utf-8');*/
    header('Content-Type: text/html; charset=utf-8');
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['op'];

      switch  ($operacion) {
        case "sum":
        echo "<h4>La suma de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 + $numero2) . "<br></h4>";
        break;

        case "rest":
        echo "<h4>La resta de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 - $numero2) . "<br></h4>";
        break;

        case "mult":
        echo "<h4>La multiplicación de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 * $numero2) . "<br></h4>";
        break;

        echo "<h2>Operaciones aritméticas: " . "<br></h2>";
        case "div":
        echo "<h4>La división de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 / $numero2) . "<br></h4>";
        break;

        case "mod":
        echo "<h4>El módulo de: " . $numero1 . " y " . $numero2 . " es: " . ($numero1 % $numero2) . "<br></h4>";
        break;
      }
   ?>

 </div>
</div>

</div>

</body>
</html>
