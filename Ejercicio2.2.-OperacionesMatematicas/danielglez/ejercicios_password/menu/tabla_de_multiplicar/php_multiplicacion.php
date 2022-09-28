<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultado tablas de multiplicar</title>
    <link href="../../../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      <div class="tablmult">
      <?php
          error_reporting(0);
          $select = $_POST['op'];
          $tabl = $_POST['n1'];
          $enviar = $_POST['n2'];
          $todo = $_POST['n3'];
          $todas_tabl = 0;


if($enviar){
          switch ($select) {
              case "nada":
              for ($x = 1; $x <= 10; $x++){
                echo "<p>".$x." x ".$tabl. " = ".($x*$tabl)."</p>";
              }
                  break;
              case "suma":
              for ($x = 1; $x <= 10; $x++){
                echo "<p>".$x." + ".$tabl. " = ".($x+$tabl)."</p>";
              }
                  break;
              case "resta":
              for ($x = 1; $x <= 10; $x++){
                echo "<p>".$x." - ".$tabl. " = ".($x-$tabl)."</p>";
              }
                  break;
              case "multiplicacion":
                      for ($x = 1; $x <= 10; $x++){
                        echo "<p>".$x." x ".$tabl. " = ".($x*$tabl)."</p>";
                      }
                  break;
              case "division":
              for ($x = 1; $x <= 10; $x++){
                echo "<p>".$x." / ".$tabl. " = ".($x/$tabl)."</p>";
              }
                  break;
          }
}
elseif($todo){
        for ($x = 1; $x <= 10; $x++){
            echo "<br>Tabla del ".$x."<br>";
            $todas_tabl++;
                  for ($y = 1; $y <= 10; $y++){
                    echo "<p>".$y." x ".$todas_tabl. " = ".($y*$todas_tabl)."</p>";
                  }
         }
}

       ?>
    </div>
    <a href="index_multiplicacion.php"><input type="submit" name="" value="« Volver" class="mini_buttom_menu"></a>
  </body>
</html>
