<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="no-cache">
  <link rel="stylesheet" href="css/style.css">
  <style>
    p {
      text-align: left;
    }
  </style>
  <title>Matemáticas</title>
</head>
<body>
  <div>
    <h2>Resultados</h2>
    <?php
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      echo "<p>- El resultado de la suma $num1+$num2 = " . ($num1+$num2) . "</p>";
      echo "<p>- El resultado de la resta $num1-$num2 = " . ($num1-$num2) . "</p>";
      echo "<p>- El resultado de la multiplicación $num1*$num2 = " . ($num1*$num2) . "</p>";
      if ($num2==0) {
        echo "<p style=\"color:red\">- La división por 0 no es posible.</p>";
      } else {
        echo "<p>- El resultado de la división $num1/$num2 = " . ($num1/$num2) . "</p>";
      }
    ?>
  </div>
</body>
</html>
