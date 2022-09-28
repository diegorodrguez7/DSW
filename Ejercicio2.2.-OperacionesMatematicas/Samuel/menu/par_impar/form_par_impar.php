<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache"> -->
        <title>Calcular Par e Impar</title>
        <!-- Al añadir el echo time evito que la hoja de estilo que carga no sea una version
        antigüa almacena en el cache del navegador -->
        <link rel="stylesheet" href="../css/estilos_formulario.css">
    </head>
    <body class="bodies-forms">
        <h1>Calcular Par O Impar</h1>
        <div class="ctn-divs">
            <?php
                $num1=$_POST["numero1"];
                $resto=$num1%2;
                if ($resto == 0){
                    echo "" ."El número "
                    .$num1. " es par.";
                }elseif ($resto == 1) {
                    echo "El número" .$num1. " es impar";
                }else{
                    echo "El número introducido es incorrecto";
                }
            ?>
        </div>
        <a href="../index.html" class="linksMainPage link1">Volver al menu</a>
        <a href="index.html" class="linksMainPage link2">Volver atrás</a>

    </body>
</html>
