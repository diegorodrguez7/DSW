<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>resultado Operaciones</title>
    <link href="../../../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div>
    <?php
      $num1 = $_POST['c1'];
      $num2 = $_POST['c2'];

          echo "La suma de ". $num1 ." + ". $num2 . " es = " . ($num1+$num2). "<br><br>";

          echo "La resta de ". $num1 ." - ". $num2 . " es = " . ($num1-$num2). "<br><br>";

          echo "La multiplicación de ". $num1 ." x ". $num2 . " es = " . ($num1*$num2). "<br><br>";

          echo "La división de ". $num1 ." / ". $num2 . " es = " . ($num1/$num2). "<br><br>";


     ?>
   </div>
   <a href="index_operaciones.php"><input type="submit" name="" value="« Volver" class="mini_buttom_menu"></a>
  </body>
</html>
