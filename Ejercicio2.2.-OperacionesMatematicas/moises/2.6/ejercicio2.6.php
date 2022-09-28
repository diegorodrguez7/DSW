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
            font-size:20px;
        }
        table{
            margin:auto;
        }
        td{
            padding:10px
        }
        </style>
        <div class="volver">
        <a href="index.html">Volver</a>
        </div>
        <div class="cuerpo">
        <h1>Ejercicio 2.6</h1>
        <?php   
        $ncol = $_POST['ncol'];
        $nfil = $_POST['nfil'];
        $ni = $_POST['ni'];
        $inter = $_POST['inter'];

         echo "<table>";
        for ($i = 1; $i <= $ncol ; $i++) {
            echo "<tr>";
             for ($f =1; $f <= $nfil; $f++) {
                echo"<td> $ni </td>";
                $ni+=$inter;
             }   
             echo "</tr>";
        }
        echo "</table>";

            
                   ?>
        </div>
    </body>
</html>
