<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="no-cache">
  <link rel="stylesheet" href="css/style.css">
  <title>Tabla</title>
  <style>
      table, td {
        border: 3px solid black;
        border-collapse: collapse;
      }
      table {
        margin: 0px auto;
      }
      td {
        padding: 10px;
      }
  </style>
</head>
<body>
  <?php
    $inte = $_POST['int'];
    echo "<table>";
    for ($fil = 1; $fil <= $_POST['fil']; $fil++) {
      echo "<tr>";
        for ($col = 1; $col <= $_POST['col']; $col++) {
          echo "<td> $inte </td>";
          $inte+=$_POST['inte'];
        };
      echo "</tr>";
    };
  ?>
</body>
</html>
