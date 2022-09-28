<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Juegos Tablas Multiplicar</title>
        <!-- <link rel="stylesheet" href="/css/master.css"> -->
    </head>
    <body>
        <h1>Aprender las tablas de multiplicar</h1>

            <form method="post">
                    <input type="number" name="numero"
                    autocomplete="off" id="numero"
                    placeholder="¿Cuanto es?" required>
                    <input type="submit" value="Enviar">
            </form>
            <div class="ctn-divs">
                <?php
                    error_reporting(0);
                    $num=NULL;
                    $contador=0;
                    // $dame_otro=false;
                    // do{

                        $array_rand1[$i]=mt_rand(0,10);
                        $array_rand2[$i]=mt_rand(0,10);

                    // } while ($dame_otro);
                    echo $numRand1 ." x ". $numRand2 ."= <br/>";
                    $num=$_POST["numero"];
                    echo $num."<br>";
                    // $comprobar=is_numeric($num);
                    // echo "<br>". $comprobar;
                    $resultado=0;
                    $resultado=$numRand1*$numRand2;
                    echo $resultado;

                    // if (is_null($num) == true) {
                        // while ($contador < 5){
                            if ($num == $resultado){
                                echo "<br>Felicidades has acertados :)";
                            }else if ($num > $resultado){
                                echo "<br>El resultado es menor :´(";
                                $num=NULL;
                                // $contador++;
                                // break;
                            }else {
                                echo "<br>El resultado es mayor :´(";
                                $num=NULL;
                                // $contador++;
                                // break;
                            }
                         if ($contador == 5){
                             echo "<br>Chico, estudia, que si no, no apruebas :)";
                            $num=NULL;
                            $dame_otro=true;
                            // $contador=0;
                             // break;
                         }
                     // }
                 // }
                     // else{
                     //     echo "El numero no tiene valor";
                     // }
                ?>
        </div>
    </body>
</html>
