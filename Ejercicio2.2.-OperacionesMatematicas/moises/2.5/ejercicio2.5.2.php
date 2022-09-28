<!DOCTYPE html>
<html>
    <body>
        <style>
            .cuerpo {
            width: 20%;
            margin-top: 5%;
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
            color:white;
        }
        a:visited{
            color:white;
        }

       .tabla{
            font-weight:bold;
        }

        .ope{
            margin-top: 2%;
            padding: 15px;
            text-align: center;
            line-height: 1.5em;
            background-color: white;
            box-shadow: black 5px 5px 10px;
            border-radius: 10px; 
            flex-basis:35%;
            margin-bottom:5%;
        }

        .flex{
            width:30%;
            display:flex;
            margin:auto;

            justify-content:space-between;
            flex-wrap:wrap;
        }
        </style>
        <div class="volver">
        <a href="index.html">Volver</a>
        </div>
        
        <h1>Ejercicio 2.2</h1>
        <?php   
                echo "<div class='flex'>";
            for ($e =1; $e <= 10; $e++) {
                echo "<div class='ope'>";
                ?>
                <div class="tabla">
                <?php
                echo "Tabla del $e </br>";  
                 ?>
                 </div>
                 <?php
                
            for ($i =1; $i <= 10; $i++) {
                echo "$e x $i = " . ($i * $e) . "<br>";
            }echo "</div>";}
            echo "</div>"
                   ?>
    
    </body>
</html>
