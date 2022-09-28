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
      $num= $_POST['num'];

      if($num%2==0){
        echo "Es par<br>";
        echo "<br>";
      }else{
        echo "Es inpar<br>";
        echo "<br>";
      }
    ?>
    <a href="index.html">Volver a Comprobar</a><br>
    <a href="../menu.html">Volver al Menú</a>
  </div>
</body>
</html>
