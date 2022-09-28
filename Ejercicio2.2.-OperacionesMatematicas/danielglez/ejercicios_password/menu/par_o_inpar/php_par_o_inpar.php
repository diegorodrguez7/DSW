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
      $nume1 = $_POST['m1'];

      if($nume1%2 == 0){
        echo "El número ".$nume1 ." es Par";
      }
      else{
        echo "El número ".$nume1 ." es inpar";
      }
       ?>
   </div>
   <a href="index_par_o_inpar.php"><input type="submit" name="" value="« Volver" class="mini_buttom_menu"></a>
  </body>
</html>
