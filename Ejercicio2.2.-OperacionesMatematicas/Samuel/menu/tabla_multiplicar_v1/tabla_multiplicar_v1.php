<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tablas de Multiplicar</title>
        <link rel="stylesheet" href="../css/estilos_formulario.css">
        <script src="https://kit.fontawesome.com/da9679571a.js" crossorigin="anonymous"></script>
    </head>
    <body class="bodies-forms">
        <h1>Tablas de Multiplicar</h1>
        <div class="ctn-tables-simple">
            <?php
                $tabla=$_POST["tabla"];
                echo "<h3>Tabla del ".$tabla. "</h3><br>";
                for ($i=1 ;$i<=10 ;$i++ ) {
                        $multi= $i * $tabla;
                        echo $tabla." x ".$i." = ".$multi."<br>";
                }
                ?>
        </div>
        <a href="../index.html" class="linkMainPage">Volver al menu</a>
        <a href="index.html" class="linksMainPage link7">Volver atrás</a>
    </body>
</html>
