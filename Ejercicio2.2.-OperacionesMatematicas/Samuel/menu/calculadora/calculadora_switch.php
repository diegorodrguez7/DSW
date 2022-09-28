<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
        <link rel="stylesheet" href="../css/estilos_formulario.css">
    </head>
    <body class="bodies-forms">
        <h1>Calculadora</h1>
        <div class="ctn-divs">
            <?php
                /*Desabilito los mensajes de error*/
                error_reporting(0);
                /*Inicializo las variables*/
                $num1=0;
                $num2=0;
                $op=NULL;
                /*Dando valor a las variables*/
                $num1 = $_POST["numero1"];
                $num2 = $_POST["numero2"];
                $op = $_POST["operands"];
                switch ($op) {
                    case '+':
                            echo "<h2>Ha Escogido la Suma</h2><br>";
                            echo $num1. " + ".$num2 ."= ".($num1+$num2);
                    break;
                    case '-':
                            echo "<h2>Ha Escogio la Resta </h2><br>";
                            echo $num1." - ".$num2." = ".($num1-$num2);
                    break;
                    case '*':
                            echo "<h2>Ha Escodigo la Multiplicación</h2><br>";
                            echo $num1." x ".$num2." = ".($num1*$num2);
                    break;
                    case '/':
                            if ($num2 == 0){
                                echo "No se puede dividir por 0";
                            }
                            else{
                                echo "<h2>Ha Escogido la División</h2><br>";
                                echo $num1." / ".$num2." = ".($num1/$num2);
                            }
                    break;
                    case '%':
                            echo "<h2>Ha Escogido el Restp</h2><br>";
                            echo $num1." % ".$num2." = ".($num1 % $num2);
                    break;
                    case '**':
                            echo "<h2>Ha Escogido el Exponente</h2><br>";
                            echo $num1." E ".$num2." = ".($num1**$num2);
                    break;
                    default:
                        echo "Lo siento, ha habido un error con los operandos";
                        break;
                }
            ?>
        </div>
        <a href="../index.html" class="linksMainPage link5">Volver al menu</a>
        <a href="index.html" class="linksMainPage link6">Volver atrás</a>
    </body>
</html>
