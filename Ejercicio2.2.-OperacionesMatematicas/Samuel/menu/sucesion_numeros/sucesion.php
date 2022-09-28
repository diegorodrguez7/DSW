<!DOCTYPE html>2
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sucesion Numeros</title>
        <link rel="stylesheet" href="../css/estilos_formulario.css">
            <script src="https://kit.fontawesome.com/da9679571a.js" crossorigin="anonymous"></script>
    </head>
    <body class="bodies-forms">
            <h1>Sucesión de Numeros</h1>
            <table class="ctn-sucesion">
                <?php
                    $col=0;
                    $row=0;
                    $num1=0;
                    $col=$_POST["columna"];
                    $row=$_POST["fila"];
                    $num1=$_POST["numero1"];
                    $increme=$_POST["incremento"];
                    for ($i=0;$i < $row ;$i++ ){
                        echo "<tr>";
                        for ($j=0 ;$j < $col;$j++ ){
                            echo "<td>".$num1."</td>";
                            $num1+=$increme;
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
            <a href="../index.html" class="linkMainPage">Volver al menu</a>
    </body>
</html>
