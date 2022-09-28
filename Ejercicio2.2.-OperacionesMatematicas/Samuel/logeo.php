<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Inisiar Sesión</title>
        <link rel="stylesheet" href="css/estilos_formulario.css">
        <script src="https://kit.fontawesome.com/da9679571a.js" crossorigin="anonymous"></script>
    </head>
    <body onload="quellueva()">
        <div class="rainyday">
            <h1>Error en el Logeo</h1>
            <img id="background" src="images/bg2.jpg" alt="background">
            <div class="ctn-forms">

                <?php
                    $user_correct="jorge";
                    $password_correct="1234";
                    $user=$_POST["usuario"];
                    $password=$_POST["contraseña"];
                    if ($user === $user_correct ){
                        if ($password_correct === $password){
                            header("Location: menu/index.html");
                        } else{
                            echo "<p>Contraseña Incorrecta</p>";
                        }
                     } else{
                            echo "<p>Usuario Incorrecto</p>";
                            if ($password_correct === $password){
                                echo "<p>Contraseña Incorrecta</p>";
                            }
                        }
                        ?>
                </div>
              <a href="index.html" class="linkMainPage">Volver al logeo</a>
          </div>
        <script src="js/rainyday.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
