<!DOCTYPE html>
<html>
    <body>
        <style>
            .cuerpo {
            width: 20%;
            margin-top: 12%;
            margin-right: auto;
            margin-left: auto;
            padding: 15px;
            text-align: center;
            line-height: 1.5em;
            background-color: white;
            box-shadow: black 5px 5px 10px;
            border-radius: 10px;

        }

        body {
            margin: 0;
            background-color: white;
            font-family: arial;
            background: radial-gradient(circle, rgba(37,37,37,1) 0%, rgba(0,0,0,1) 100%);
        }
            .volver{
            margin: 20px;
            font-weight: bold;
        }

        a{
            text-decoration: none;
            color:white
        }
        a:visited{
            color:white
        }
        </style>
        <div class="volver">
        <a href="index.html">Volver</a>
        </div>
        <div class="cuerpo">
        <h1>Ejercicio 2.2</h1>
        <?php   
           $name = $_POST['nombre'];
           $age = $_POST['edad'];
           $a = 5;
           $num1 = $_POST['num1'];
           $num2 = $_POST['num2'];

           echo "Hola " . $name . ", </br>  Sabemos que tienes " . $age . " años </br>";
           echo "En cinco años tendrás " . ($age + $a) . ".</br>";
           echo "La suma de " . $num1 . " mas " . $num2 . " es " . ($num1 + $num2) . "</br>";
           echo "La resta de " . $num1 . " menos " . $num2 . " es " . ($num1 - $num2) . "</br>";
           echo "La multiplicación de " . $num1 . " por " . $num2 . " es " . ($num1 * $num2) . "</br>";
           if  ($num2 == 0) {
            echo "La division de " . $num1 . " entre " . $num2 . " es " . "Infinito" . "</br>"; 
           }
           else {
           echo "La division de " . $num1 . " entre " . $num2 . " es " . ($num1 / $num2) . "</br>";
           }
                   ?>
        </div>
    </body>
</html>
