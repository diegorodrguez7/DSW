<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="../../../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div>
      <?php
      $select = $_POST['op'];
      $num1 = $_POST['s1'];
      $num2 = $_POST['s2'];

      switch ($select) {
          case "suma":
              echo "La suma de ". $num1 ." + ". $num2 . " es = " . ($num1+$num2);
              break;
          case "resta":
              echo "La resta de ". $num1 ." - ". $num2 . " es = " . ($num1-$num2);
              break;
          case "multiplicacion":
              echo "La multiplicación de ". $num1 ." x ". $num2 . " es = " . ($num1*$num2);
              break;
          case "division":
              echo "La división de ". $num1 ." / ". $num2 . " es = " . ($num1/$num2);
              break;
      }
      ?>
    </div>
    <a href="index_calculadora.php"><input type="submit" name="" value="« Volver" class="mini_buttom_menu"></a>
  </body>
</html>
