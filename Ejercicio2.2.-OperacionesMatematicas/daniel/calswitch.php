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
  <div>
    <h2>Resultados</h2>
    <?php
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      switch ($_POST['op']) {
        case 'suma':
          echo "<p>El resultado de la suma entre $n1 y $n2 es: " . ($n1+$n2) . "</p>";
          break;

        case 'resta':
          echo "<p>El resultado de la resta entre $n1 y $n2 es: " . ($n1-$n2) . "</p>";
          break;

        case 'multip':
          echo "<p>El resultado de la multiplicación entre $n1 y $n2 es: " . ($n1*$n2) . "</p>";
          break;

        case 'divi':
          if ($n2 == 0) {
            echo "<p style=\"color:red\">La división entre 0 no es posible.</p>";
          } else {
          echo "<p>El resultado de la división entre $n1 y $n2 es: " . ($n1/$n2) . "</p>";
          }
          break;

        default:
          echo "<p><span style=\"font-size:1.1em\">Por favor</span>, regrese a la página anterior y escoja una operación.</p>";
          break;
      }
    ?>
  </div>
</body>
</html>
