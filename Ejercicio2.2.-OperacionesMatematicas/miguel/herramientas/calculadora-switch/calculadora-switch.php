<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Calculadora Switch</title>
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
    $n2=$_POST['n2'];
    $cuentas=$_POST['cuentas'];

    switch ($cuentas) {
      case 'Suma':
        echo "El resultado es: $n1+$n2 = " . ($n1+$n2) . "";
        break;

      case 'Resta':
        echo "El resultado es: $n1-$n2 = " . ($n1-$n2) . "";
        break;

      case 'Multiplicación':
        echo "El resultado es: $n1*$n2 = " . ($n1*$n2) . "";
        break;

      case 'División':

        if ($n2==0){
        echo "La división entre 0 no es posible";
      } else {
        echo "El resultado es: $n1/$n2 = " . ($n1/$n2) . "";
      }
        break;
    }
     ?>
     <br />
     <br />
     <a href="../../logged.html"><input class="botondos" type="button" value="Volver a las Herramientas"></a>
     <a href="index.html"><input class="botondos" type="button" value="Volver"></a>
   </div>
  </body>
</html>
