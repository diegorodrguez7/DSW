<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Tablas de multiplicar </title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <style>
    .botondos{
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
      $n1=$_POST['n1'];

        echo "<p style='text-decoration:underline;'> Tabla del $n1 </p>";
      for ($x=1; $x<=10; $x++){
        echo "<p> $x * $n1 = " . ($x*$n1) . "";
      }
     ?>
     <br />
     <br />
     <a href="../../logged.html"><input class="botondos" type="button" value="Volver a Herramientas"></a>
     <a href="index.html"><input class="botondos" type="button" value="Volver"></a>
   </div>
  </body>
</html>
