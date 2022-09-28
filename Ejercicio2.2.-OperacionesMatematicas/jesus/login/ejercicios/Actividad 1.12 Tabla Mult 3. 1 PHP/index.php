<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <title>Calculadora</title>
</head>

<body>

  <div class="contain">
    <div class="wrapper">
      <div class="contacts">
        <h1>Actividad 1.12 Tabla Multiplicar v2</h1>

        <ul>
          <li>Nombre: Jesús</li>
          <li>Apellidos: Lorenzo</li>
          <li><h3 class="hache"><a href="../">Volver al menú principal. </a></h3>
          </li>
        </ul>
      </div>
      <div class="form">
        <h3>Tabla de Multiplicar v2</h3>
        <form class="form1" action="resultado.php" method="post">
          <p>
            <label for="">Introduce un número.</label>
            <input type="number" name="num1">
          </p>
          <p>
            <label for="">Selecciona una opción.</label>
            <select name="op" class="op1">
              <option value="sum">Una tabla</option>
              <option value="rest">Todas</option>
            </select>
          </p>

            <input type="submit" name="Enviar">
          </div>
      </div>
    </div>
  </div>
</body>

</html>
