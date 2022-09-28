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
  <form method="post" action="">
    Introdcuce un número: <input type="text" name="numero" style="background-color:white">
  </form>
  <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $num = (isset($_POST['numero']) ? $_POST['numero'] : NULL );
    if ($num == NULL) {
    }
    elseif ($num % 2 == 0) {
    echo "<p style=\"text-align:center\">Número par</p>";
  } else {
    echo "<p style=\"text-align:center\">Número impar</p>";
  }
  ?>
</div>
</body>
</html>
