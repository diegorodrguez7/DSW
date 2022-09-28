
 <!DOCTYPE html>
 <html lang="es">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
   <link rel="stylesheet" href="assets/css/reset.css">
   <link rel="stylesheet" href="assets/css/supersized.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <title>Document</title>
 </head>
 <body>
   <div class="page-container">
  
         <?php
           /* esto es para que acepte las ñ y tildes: header('Content-Type: text/html; charset=utf-8');*/
           header('Content-Type: text/html; charset=utf-8');
           $user = $_POST['usuario'];
           $pass= $_POST['contra'];
           $userc = "jesus";
           $passwd = "lorenzo";

           if ($user == $userc && $pass == $passwd) {
            header("Location: login/index.php");
            exit();
           }
           elseif
             ($user !== $userc) {
               echo "<h1>";
                 echo "Usuario incorrecto </br>";
               echo "</h1>";
               echo "<p></br>";
                echo "<h1>";
                    echo "<a href='index.php'>Volver ha intentarlo.</a>";
                echo "</h1>";
               echo "</p>";
             }
           elseif
             ($pass !== $passwd) {
               echo "<h1>";
               echo "Contraseña incorrecta";
               echo "</h1>";
               echo "<p></br>";
                echo "<h1>";
                    echo "<a href='index.php'>Volver ha intentarlo.</a>";
                echo "</h1>";
               echo "</p>";
             }
           elseif
             ($user !== $userc && $pass !== $passwd) {
               echo "<h1>";
               echo "Usuario y contraseña INCORRECTOS";
               echo "</h1>";
               echo "<p></br>";
                echo "<h1>";
                    echo "<a href='index.php'>Volver ha intentarlo.</a>";
                echo "</h1>";
               echo "</p>";
             }
          ?>
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
       

  </div>
 </body>
 </html>
