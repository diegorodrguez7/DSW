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
            <h1>Resultado:</h1>
        <?php  
        
           $n = $_POST['numero'];
           if (($n % 2) == 0) {
            echo "$n es par";
           }
           else {
            echo "$n es impar";
        };
        ?>
        </div>
    </body>
</html>
