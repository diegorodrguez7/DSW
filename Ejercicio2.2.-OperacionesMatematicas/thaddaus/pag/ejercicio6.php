<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
    <div class="bodydiv">
      <input class="stylea" type="checkbox">
      <div class="black"></div>
      <div class="bodystyle">
        <div class="styleb">
          <p>Change Style</p>
        </div>
        <div class="bg-image">
    			<img class="bgimage" src="../img/dark.png" />
    		</div>

        <header>
          <input class="sideinp" type="checkbox">
          <div class="container">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
          </div>
          <div class="darkheader"></div>

            <div class="sidemenu">
              <ul>
                <li><h4>Usuario:</h4></li>
                <li><p>Anonymous</p></li>
                <li><h4>Contraseña:</h4></li>
                <li><p>Anonymous</p></li>
              </ul>
            </div>
        </header>

        <div class="formul">
          <p class="testlog">
          <?php
          $user = $_POST["user"];
          $password = $_POST["password"];

          if ($user=="Anonymous" && $password=="Anonymous") {
            header("location: pag1.php");
          }

          elseif ($user=="Anonymous" && $password!="Anonymous") {
            echo "Contraseña incorrecta";
          }

          elseif ($user!="Anonymous" && $password=="Anonymous") {
            echo "Nombre de usuario no incorrecto";
          }

          else {
            echo "No existe La cuenta del usuario";
          }
          ?>
        </p>

          <a href="../index.html"><input class="send" type="button" value="Volver"></a>
        </div>
      </div>
    </div>
  </body>
</html>
