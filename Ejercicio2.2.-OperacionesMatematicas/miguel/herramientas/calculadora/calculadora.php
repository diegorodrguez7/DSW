<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
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
      $numerouno=$_POST['n1'];
      $numerodos=$_POST['n2'];
      echo "<hr />";
      echo "Los números son $numerouno y  $numerodos <br /><br />";
      echo "Suma: " . ($numerouno+$numerodos) . "<br />";
      echo "Resta: " . ($numerouno-$numerodos) . "<br />";
      echo "Multiplicación: " . ($numerouno*$numerodos) . "<br />";
      if ($numerodos==0){
        echo " <br /> La división entre 0 no es posible";
      } else{
        echo "División: " . ($numerouno/$numerodos) . "";
      };
      echo "<hr />";

     ?>
     <a href="../../logged.html"><input class="botondos" type="button" value="Volver a las Herramientas"></a>
     <a href="index.html"><input class="botondos" type="button" value="Volver"></a>
   </div>
  </body>
</html>
