<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
  <title>Calculadora</title>
</head>

<body>

<div class="contain">
<div class="wrapper">
  <div class="contacts">
      <h1>Actividad 1.13 Tabla con números</h1>

      <ul>
        <li>Nombre: Jesús</li>
        <li>Apellidos: Lorenzo</li>
      </ul>
      <h3 class="hache"><a href="../../index.php">Volver al menú de ejercicios. </a></h3>    
    </div>
    <div class="form">
          <h3>Generador de tabla con variables</h3>
          <form class="form1" action="resultado.php" method="post">
            <p>
              <label for="">Introduce las Columnas.</label>
              <input type="number" name="cols" required="required">
            </p>
            <p>
              <label for="">Introduce las Filas.</label>
              <input type="number" name="fils" required="required">
            </p>
            <p>
              <label for="">Introduce el primer número.</label>
              <input type="number" name="num1" required="required">
            </p>
            <p>
              <label for="">Introduce el intervalo.</label>
              <input type="number" name="int" required="required">
            </p>
            <input type="submit" name="Enviar">
          </form>
        </div>

</div>
</div>
</body>

</html>
