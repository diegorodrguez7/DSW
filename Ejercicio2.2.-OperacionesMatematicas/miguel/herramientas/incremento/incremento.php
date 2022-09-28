<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Incremento </title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <style media="screen">
    .botondos{
      margin-left: 3px;
      background-color: grey;
      border:2px solid black;
      border-radius: 5px;
    }
    .botondos:focus{
      outline-color: white;
    }
    </style>
  </head>
  <body>
    <div>
    <?php

    $inter=$_POST['n4'];

    $filas=$_POST['n1'];
    $columnas=$_POST['n2'];
    $intervalo=$_POST['n3'];

    echo "<table border='1px' width='50%' style='margin:auto; margin-top:20px;'>";
    for ($num2=1; $num2<=$filas; $num2++){
        echo "<tr>";
          for ($num=1; $num<=$columnas; $num++){
            echo "<td> $inter </td>";
            $inter+=$intervalo;
          }
    }
     ?>
     <a href="../../logged.html"><input class="botondos" type="button" value="Volver a Herramientas"></a>
     <a href="index.html"><input class="botondos" type="button" value="Volver"></a>
   </div>
  </body>
</html>
