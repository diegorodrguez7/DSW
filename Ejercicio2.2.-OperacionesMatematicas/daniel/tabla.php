<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="no-cache">
  <link rel="stylesheet" href="css/style.css">
  <title>Matemáticas</title>
</head>
<body>
  <?php
    $num = $_POST['num'];
    $calc = (isset($_POST['calc']) ? $_POST['calc'] : NULL );
    $most = (isset($_POST['most']) ? $_POST['most'] : NULL );
    echo "<div>";
    if ($calc) {
      echo "<h2 style=\"text-decoration:underline\">Tabla de multiplicar del $num</h2>";
      for ($x = 1; $x <= 10; $x++) {
        echo "<p>$num x $x = " . ($num*$x) . "</p>";
      }
     } elseif ($most) {
      for ($x = 1; $x <= 10; $x++) {
        echo "<h2 style=\"text-decoration:underline\">Tabla de multiplicar del $x</h2>";
        for ($y = 1;$y <= 10; $y++) {
          echo "<p>$x x $y = " . ($x*$y) . "</p>";
        }
      }
    } elseif ($calc == NULL) {

     } else {
      echo "<h2>Petición inválida.</h2>";
    }
    echo "</div>";
   ?>
</body>
</html>
