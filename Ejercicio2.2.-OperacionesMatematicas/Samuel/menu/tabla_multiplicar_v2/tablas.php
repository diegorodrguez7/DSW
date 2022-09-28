<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tablas de Multiplicar</title>
        <link rel="stylesheet" href="../css/estilos_formulario.css?v=<?php echo time();?>">
        <script src="https://kit.fontawesome.com/da9679571a.js" crossorigin="anonymous"></script>
    </head>
    <body class="ctn-body-table">
        <h1>Tablas de Multiplicar</h1>
        <div class="ctn-tables">
            <?php
                $tablaInicio=$_POST["tablaInicial"];
                $tablaFin=$_POST["tablaFinal"];
                for ($i=$tablaInicio; $i<=$tablaFin; $i++ ) {
                    echo "<div class=\"ctn-table\">";
                        echo "<h3>Tabla del ".$i. "</h3><br>";
                        for ($j=0; $j<=10; $j++) {
                            $multi= $i * $j;
                            echo $i." x ".$j." = ".$multi."<br>";
                        }
                    echo "</div>";
                }
            ?>
        </div>
        <a href="../index.html" class="linkMainPage">Volver al menu</a>
    </body>
</html>
