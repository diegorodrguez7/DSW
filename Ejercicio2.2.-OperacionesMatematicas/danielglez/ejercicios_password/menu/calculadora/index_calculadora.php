<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="../../../CSS/estilo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form class="" action="php_calculadora.php" method="post">
      <h1>Calculadora</h1>

        <input type="number" name="s1" value="" placeholder="Introduzca un número"><br>
        <input type="number" name="s2" value="" placeholder="Introduzca otro número"><br>

        <select class="" name="op">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

<input type="submit" name="" value="Enviar" class="button">
<input type="reset" name="" value="Borrar" class="button">
    </form>
<a href="../index_menu.html"><input type="submit" name="" value="Menú" class="mini_buttom_menu"></a>
  </body>
</html>
