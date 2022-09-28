<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Bucles </title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <style media="screen">
      table{
        margin-bottom: 20px;
      }
      .botondos{
        background-color: grey;
        border:2px solid black;
        border-radius: 5px;
      }
      .botondos:focus{
        outline-color: white;
      }
    </style>
  </head>
  <body>
    <div>
      <table bgcolor='grey' align='center' border='1'>
            <tr>
              <td> Números del 0 al 25 (for) </td>
              <td> Números del 10 al 1 (for) </td>
              <td> Números del 0 al 25 de 2 en dos (for) </td>
            </tr>
            <tr>
              <td>
                <?php
                  for ($numero=0; $numero<=25; $numero++){
                    echo " <p> $numero </p>";
                  }
                 ?>
              </td>
              <td>
                <?php
                  for ($numero=10; $numero>=1; $numero--){
                    echo " <p> $numero </p>";
                  }
                 ?>
              </td>
              <td>
                <?php
                  for ($numero=0; $numero<=25; $numero+=2){
                    echo " <p> $numero </p>";
                  }
                 ?>
              </td>
            </tr>
            </table>
            <table bgcolor='grey' align='center' border='1'>
                  <tr>
                    <td> Números del 0 al 25 (while) </td>
                    <td> Números del 10 al 1 (while) </td>
                    <td> Números del 0 al 25 de 2 en dos (while) </td>
                  </tr>
                  <tr>
                    <td>
                      <?php
                        $numero=0;

                        while ($numero<=25){
                          echo " <p> $numero </p>";
                          $numero++;
                        }
                       ?>
                    </td>
                    <td>
                      <?php
                        $numero=10;

                        while ($numero>=0){
                          echo "<p> $numero </p>";
                          $numero--;
                        }

                       ?>
                    </td>
                    <td>
                      <?php
                        $numero=0;

                        while ($numero<=25){
                          echo " <p> $numero </p>";
                          $numero+=2;
                        }
                       ?>
                    </td>
                  </tr>
                  </table>
                  <table bgcolor='grey' align='center' border='1'>
                        <tr>
                          <td> Números del 0 al 25 (do-while) </td>
                          <td> Números del 10 al 1 (do-while) </td>
                          <td> Números del 0 al 25 de 2 en dos (do-while) </td>
                        </tr>
                        <tr>
                          <td>
                            <?php
                              $numero=0;

                              do {
                                echo "<p> $numero </p>";
                                $numero++;
                              } while ($numero<=25);
                             ?>
                          </td>
                          <td>
                            <?php
                            $numero=10;
                              do {
                                echo "<p> $numero </p>";
                                $numero--;
                              } while ($numero>=0);
                             ?>
                          </td>
                          <td>
                            <?php
                            $numero=0;

                            do {
                              echo "<p> $numero </p>";
                              $numero+=2;
                            } while ($numero<=25);
                             ?>
                          </td>
                        </tr>
                        </table>
                        <br />
                        <a href="../../logged.html"><input class="botondos" type="button" value="Volver a Herramientas"></a
                      </div>
  </body>
</html>
