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
      <h1>Actividad 1.10</h1>

      <ul>
        <li>Nombre: Jesús</li>
        <li>Apellidos: Lorenzo</li>
        <h3 class="hache"><a href="../../../index.php">Volver al menú de ejercicios. </a></h3>          </ul>
    </div>
    <div class="form">
          <h3>Calculadora</h3>
          <form class="form1" action="resultado.php" method="post">
            <p>
              <label for="">Introduce un número.</label>
              <input type="number" name="num1" required="required">
            </p>
            <p>
              <label for="">Introduce otro número.</label>
              <input type="number" name="num2" required="required">
            </p>
            <p>
              <label for="">Selecciona una operación.</label>
              <select name="op" class="op1">
                <option value="sum">Suma +</option>
                <option value="rest">Resta -</option>
                <option value="mult">multiplicación *</option>
                <option value="div">División /</option>
                <option value="mod">Módulo %</option>
              </select>
            </p>
              <input type="submit" name="Enviar">
          </form>
        </div>

</div>
</div>
</body>

</html>
