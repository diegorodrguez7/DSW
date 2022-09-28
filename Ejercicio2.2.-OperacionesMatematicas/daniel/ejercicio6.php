<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="no-cache">
  <link rel="stylesheet" href="css/style.css">
  <title>Matemáticas</title>
</head>
<body>
  <?php
    $user = $_POST['user'];
    $psw = $_POST['password'];
    if ($user == "daniel" && $psw == "1234") {
      header("location: menu.html");
    } elseif ($user !== "daniel") {
      echo "Nombre de usuario incorrecto.";
    } elseif ($user == "daniel" && $psw !== "1234") {
      echo "Contraseña incorrecta.";
    } else {
      echo "Usuario no existe";
    }
  ?>
</body>
</html>
