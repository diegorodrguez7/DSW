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
      $num1= $_POST['num1'];
      $num2= $_POST['num2'];
      $opt= $_POST['opt'];

      switch ($opt) {
        case 'suma':
            echo"La suma de " . $num1 . " y " . $num2 . " es " . $result=($num1 + $num2) . "<br>";
            echo "<br>";
          break;
        case 'resta':
            echo"La suma de " . $num1 . " y " . $num2 . " es " . $result=($num1 - $num2) . "<br>";
            echo "<br>";
          break;
        case 'multiplica':
            echo"La suma de " . $num1 . " y " . $num2 . " es " . $result=($num1 * $num2) . "<br>";
            echo "<br>";
          break;
        case 'divide':
            echo"La suma de " . $num1 . " y " . $num2 . " es " . $result=($num1 / $num2) . "<br>";
            echo "<br>";
          break;

        default:
          echo "No es correcto";
          break;
      }

    ?>
    <a href="index.html">Volver a Calcular</a><br>
    <a href="../menu.html">Volver al Menú</a>
  </div>
</body>
</html>
