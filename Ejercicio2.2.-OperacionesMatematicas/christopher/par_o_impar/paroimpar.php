<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solución</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>La solución es</h1>
    <div class="contenido">

    <?php
      $numero = $_POST['numero'];
      if ($numero %2 == 0) {
        echo "<p>El número es Par</p>";
      }
      else{
        echo "<p>El número es Impar</p>";
      }
     ?>
     <div class="menu">
       <a href="index.html">Menú</a>
     </div>

    </div>
  </body>
</html>
