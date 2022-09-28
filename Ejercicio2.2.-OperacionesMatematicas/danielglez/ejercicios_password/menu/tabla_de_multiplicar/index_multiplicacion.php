<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tablas de multiplicar</title>
    <link href="../../../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form class="" action="php_multiplicacion.php" method="post">
      <h1>Tabla de Multiplicar</h1>
      <p>Introduzca un número:</p>
      <input type="number" name="n1" value=""><br>
      <select class="" name="op">
          <option value="nada" selected>Escoge un opción</option>
          <option value="suma">Suma</option>
          <option value="resta">Resta</option>
          <option value="multiplicacion">Multiplicación</option>
          <option value="division">División</option>
      </select>

      <input type="submit" name="n3" value="Mostrar todas las tablas" class="button_tablas_mult">
      <input type="submit" name="n2" value="Enviar" class="button">
      <input type="reset" name="" value="Borrar" class="button">
    </form>

<a href="../index_menu.html"><input type="submit" name="" value="Menú" class="mini_buttom_menu"></a>

  </body>
</html>
