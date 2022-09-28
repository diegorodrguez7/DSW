<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario Ejercicio 1.2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/estilos_formulario.css">
    </head>
    <body class="bodies-forms">
        <h1>Mensaje de Bienvenida</h1>
        <div class="ctn-divs">
        <?php
            /*Asignando el valor a las variables*/
            $nombre=$_POST['nombre'];
            $num1=$_POST['numero1'];
            $num2=$_POST['numero2'];
            $multi= $num1 * $num2;
            $divi= $num1 / $num2;
            echo "<span>Bienvenido " .$nombre. "</span><br>" .
            "La suma de ".$num1. "+" .$num2. "=" .($num1+$num2). "<br>".
            "La resta de " .$num1. "-" .$num2. "=" .($num1-$num2). "<br>" ."La multiplicación de"
             .$num1. "*" .$num2. "=" .($num1*$num2). "<br>La division de "
             .$num1. "/" .$num2. "=" .($num1/$num2);
        ?>
        </div>
        <a href="../index.html" class="linksMainPage link3">Volver al menu</a>
        <a href="../index.html" class="linksMainPage link4">Volver atrás</a>
    </body>
</html>
