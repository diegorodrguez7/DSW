<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Par o Impar</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>Operaciones Matemáticas</h1>

    <div class="contenido">
      <div class="contenido2">

      <?php
      error_reporting(0);
      $nuno = $_POST['uno'];
      $solo = $_POST['calcular'];
      $todos = $_POST['todos'];
      $unos="1";

          if ($solo) {

                for ($a=1; $a <= 10; $a++) {
                    echo "<p>$nuno x $a = " . ($nuno*$a). "</p><br>";
                }

          }elseif ($todos) {

                for ($b=1; $b<=10 ; $b++) {
                  $uno++;
                  echo "<div class=\"multii\">";
                  for ($a=1; $a <= 10; $a++) {

                      echo "<p class=\"multi\">$uno x $a = " . ($uno*$a). "</p><br>";

                  }
                  echo "</div>";
                  echo "<br>";

              }

          }

      ?>

      </div>
      <div class="menu">
        <a href="index.html">Atrás</a>
      </div>

    </div>



  </body>
</html>
