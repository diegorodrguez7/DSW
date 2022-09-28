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
    error_reporting(0);
      $num=$_POST['num1'];
      $todos=$_POST['todos'];
      $uno=$_POST['uno'];

      if($todos){

        for ($i=1; $i <= 10 ; $i++) {
          echo "<hr>";
          echo "<p>Tabla del " . $i . "</p> <br>";
          echo "<br>";
          for ($j=0; $j <=10 ; $j++) {
            echo $i . " x " . $j . " = " . $res = ($i * $j) . "<br>" ;
            echo "<br>";
          }
        }

      }else{

        if($num< 0 || $num > 10){
          echo "El numero es menor que 1 o mayor que 10";

        }else{

          echo "<p>La tabla es:</p>";

          for ($i = 1; $i <= 10 ; $i++) {
            echo $num . " x " . $i . " = " . $res = ($num * $i) . "<br>" ;
          }

        }

      }


    ?>
    <br>
    <a href="index.html">Volver a Calcular</a><br>
    <a href="../menu.html">Volver al Menú</a>
  </div>
</body>
</html>
