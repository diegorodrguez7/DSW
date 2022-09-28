<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Par o Impar</title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <style>
    .datosdos{
      background-color: transparent;
      border:0px;
      border-bottom: 2px solid black;
      border-bottom-right-radius: 10px;
      text-align: center;
      width: 80px;
      margin-left: 10px;
      transition: 0.3s;
    }
    .datosdos:focus{
      outline:none;
      transform: translateX(10px);
      transition: 0.3s;
      border-color: white;
    }
    .botondos{
      background-color: grey;
      border:2px solid black;
      border-radius: 5px;
    }
    .botondos:focus{
      outline-color: white;
    }
    h3{
      font-size: 9px;
      font-family: arial;
    }
    </style>
  </head>
  <body>
    <div>
    <form method="post">
      Introduce un número: <input class="datosdos" type='text' name='numero' autocomplete="off">
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $var=$_POST['numero'];
    if ($var%2==0) {
      echo "El numero es par";
    }
    else {
      echo "El número es impar";
    };
     ?>
     <br />
     <br />
     <h3> *Para que te lo diga pulsa Enter* </h3>
     <a href="../../logged.html"><input class="botondos" type="button" value="Volver a las Herramientas"></a>
   </div>
  </body>
</html>
