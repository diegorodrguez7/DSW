<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
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
            <form action="" method="post">
              <ul>
                <li><input class="menu" type="submit" name="menu" value="Welcome"></li>
                <li><input class="menu" type="submit" name="menu" value="Comprobar Números"></li>
                <li><input class="menu" type="submit" name="menu" value="Calculadora"></li>
                <li><input class="menu" type="submit" name="menu" value="Calculadora switch"></li>
                <li><input class="menu" type="submit" name="menu" value="Tablas de Multiplicar"></li>
                <li><input class="menu" type="submit" name="menu" value="Opcional"></li>
                <li><input class="menu" type="submit" name="menu" value="Comprobar Números primos"></li>
                <li><input class="menu" type="submit" name="menu" value="Encontrar Números primos"></li>
                <li><input class="menu" type="submit" name="menu" value="Series numéricas"></li>
                <li><a href="../index.html"><input class="menu logout" type="button" value="Logout"></a></li>
              </ul>
            </form>
          </div>
      </header>

      <div class="formul">
      <?php
        $menu = (isset($_POST['menu']) ? $_POST['menu'] : NULL);

#main-switch
        switch ($menu) {

          case 'Welcome':
          case NULL:
          echo  "<h3>Welcome Anonymous</h3>
          </div>";
          break;


#main-switch
        case 'Comprobar Números':


            echo "<form action=\"\" method=\"post\">
              <h3>Comprobar números</h3>

              <table class=\"tableform\">
                <tr>
                  <td><p>Introduzca un número:&nbsp&nbsp</p></td>
                  <td><p><input type=\"text\" name=\"number\"/></p></td>
                </tr>
              </table>

              <input name=\"menu\" type=\"hidden\" value=\"Comprobar Números\">
              <input class=\"send\" type=\"submit\" value=\"Enviar\">
            </form>";

              $numero = (isset($_POST['number']) ? $_POST['number'] : NULL);
              if ($numero==NULL) {
              }
              elseif ($numero%2==0) {
                echo "<p>El número " . $numero . " es par</p>";
              }
              else {
                echo "<p>El número " . $numero . " es impar</p>";
              };

            echo "</div>
          </div>";
          break;

#main-switch
        case 'Calculadora':



            echo "<form action=\"\" method=\"post\">
              <h3>Introduzca 2 Números</h3>

              <table class=\"tableform\">
                <tr>
                  <td><p>Número 1:&nbsp&nbsp</p></td>
                  <td><p><input type=\"text\" name=\"num1\"/></p></td>
                </tr>
                <tr>
                  <td><p>Número 2:&nbsp&nbsp</p></td>
                  <td><p><input type=\"text\" name=\"num2\"/></p></td>
                </tr>
              </table>
              <input name=\"menu\" type=\"hidden\" value=\"Calculadora\">
              <input class=\"send\" type=\"submit\" value=\"Enviar\">
            </form>";
            $num1 = (isset($_POST['num1']) ? $_POST['num1'] : NULL);
            $num2 = (isset($_POST['num2']) ? $_POST['num2'] : NULL);
            if ($num1==NULL && $num2==NULL) {
            }
            else {
              echo "<table class=\"tableform\">
                <tr>
                  <td><p>Suma:</p></td>
                  <td><p>" . $num1 . " + " . $num2 . " = " . ($num1 + $num2) ."</p></td>
                </tr>
                <tr>
                  <td><p>Resta:</p></td>
                  <td><p>" . $num1 . " - " . $num2 . " = " . ($num1 - $num2) ."</p></td>
                </tr>
                <tr>
                  <td><p>Multiplicación:</p></td>
                  <td><p>" . $num1 . " * " . $num2 . " = " . ($num1 * $num2) ."</p></td>
                </tr>";
                if ($num2==0) {
                  echo "<tr>
                    <td><p>División:</p></td>
                    <td><p style=\"color:red;\">Numero/0 no es posible</p></td>
                  </tr>
                </table>";
                }

                else {
                  echo "<tr>
                    <td><p>División:</p></td>
                    <td><p>" . $num1 . " / " . $num2 . " = " . ($num1 / $num2) ."</p></td>
                  </tr>
                </table>";
              };
            };
        echo "</div>";
        break;

#main-switch
        case 'Calculadora switch':



            echo "<form action=\"\" method=\"post\">
              <h3>Introduzca 2 Números</h3>

              <table class=\"tableform\">
                <tr>
                  <td><p>Número 1:&nbsp&nbsp</p></td>
                  <td><p><input type=\"text\" name=\"num1\"/></p></td>
                </tr>
                <tr>
                  <td><p>Número 2:&nbsp&nbsp</p></td>
                  <td><p><input type=\"text\" name=\"num2\"/></p></td>
                </tr>
                <tr>
                  <td><p>Operación:&nbsp&nbsp</p></td>
                  <td>
                    <select class=\"select\" name=\"operan\">
                      <option value=\"+\">+</option>
                      <option value=\"-\">-</option>
                      <option value=\"*\">*</option>
                      <option value=\"/\">/</option>
                    </select>
                  </td>
                </tr>
              </table>
              <input name=\"menu\" type=\"hidden\" value=\"Calculadora switch\">
              <input class=\"send\" type=\"submit\" value=\"Enviar\">
            </form>";
            $num1 = (isset($_POST['num1']) ? $_POST['num1'] : NULL);
            $num2 = (isset($_POST['num2']) ? $_POST['num2'] : NULL);
            $operan = (isset($_POST['operan']) ? $_POST['operan'] : NULL);
            if ($num1==NULL && $num2==NULL) {
            }
            else {
              echo "<table class=\"tableform\">";
              switch ($operan) {
                case '+':
                echo "<tr>
                  <td><p>Suma:</p></td>
                  <td><p>" . $num1 . " + " . $num2 . " = " . ($num1 + $num2) ."</p></td>
                </tr></table>";
                break;
                case '-':
                echo "<tr>
                  <td><p>Resta:</p></td>
                  <td><p>" . $num1 . " - " . $num2 . " = " . ($num1 - $num2) ."</p></td>
                </tr></table>";
                break;
                case '*':
                echo "<tr>
                  <td><p>Multiplicación:</p></td>
                  <td><p>" . $num1 . " * " . $num2 . " = " . ($num1 * $num2) ."</p></td>
                </tr></table>";
                break;
                case '/':
                if ($num2==0) {
                  echo "<tr>
                    <td><p>División:</p></td>
                    <td><p style=\"color:red;\">Número/0 no es posible</p></td>
                  </tr>
                </table>";
                }

                else {
                  echo "<tr>
                    <td><p>División:</p></td>
                    <td><p>" . $num1 . " / " . $num2 . " = " . ($num1 / $num2) ."</p></td>
                  </tr>
                </table>";
                break;
                }
              }
              };
              break;

#main-switch
              case 'Tablas de Multiplicar':



                echo "<form action=\"\" method=\"post\">
                  <h3>Tablas de Multiplicar</h3>

                  <table class=\"tableform\">
                    <tr>
                      <td><p>Número:&nbsp&nbsp</p></td>
                      <td>
                        <input class=\"select\" type=\"number\" min=\"1\" max=\"10\" step=\"1\" value=\"5\" name=\"multi\">
                      </td>
                    </tr>
                  </table>
                  <input name=\"menu\" type=\"hidden\" value=\"Tablas de Multiplicar\">
                  <input name=\"todos\"class=\"send\" type=\"submit\" value=\"Enviar\">
                  <input name=\"todos\" class=\"send\" type=\"submit\" value=\"Ver todos\">
                </form>";
                $multi = (isset($_POST['multi']) ? $_POST['multi'] : NULL);
                $todos = (isset($_POST['todos']) ? $_POST['todos'] : NULL);
                if ($multi==NULL) {
                }
                elseif ($todos=='Enviar') {
                  echo "<div class=\"multipl\"><br />
                  <h3>Tabla del " . $multi . "</h3>";
                    for ($i=1; $i<=10 ; $i++) {
                      echo $multi . " * " . $i . " = " . ($multi * $i) . "<br />";
                    }
                  echo "</div>";
                break;
              }

              elseif ($todos=='Ver todos') {
                echo "<div class=\"multipl\"><br />";
                for ($multi=1; $multi<=10; $multi++) {
                  echo "<h3>Tabla del " . $multi . "</h3>";
                    for ($i=1; $i<=10 ; $i++) {
                      echo $multi . " * " . $i . " = " . ($multi * $i) . "<br />";
                    }
                  }
                echo "</div>";
              break;
            };
        echo "</div>";
        break;

#main-switch
        case 'Opcional':

          echo "<form action=\"\" method=\"post\">
            <h3>Tablas de Multiplicar</h3>

            <table class=\"tableform\">
              <tr>
                <td><p>Número:&nbsp&nbsp</p></td>
                <td>
                  <input class=\"select\" type=\"number\" min=\"1\" max=\"100\" step=\"1\" value=\"5\" name=\"opc\">
                </td>
              </tr>
              <tr>
                <td><p>Operación:&nbsp&nbsp</p></td>
                <td>
                  <select class=\"select\" name=\"operan\">
                    <option value=\"+\">+</option>
                    <option value=\"-\">-</option>
                    <option value=\"*\">*</option>
                    <option value=\"/\">/</option>
                  </select>
                </td>
              </tr>
            </table>
            <input name=\"menu\" type=\"hidden\" value=\"Opcional\">
            <input name=\"todos\"class=\"send\" type=\"submit\" value=\"Enviar\">
          </form>";
          $opc = (isset($_POST['opc']) ? $_POST['opc'] : NULL);
          $operan = (isset($_POST['operan']) ? $_POST['operan'] : NULL);
          if ($opc==NULL) {
          }
          else {
            echo "<div class=\"multipl\"><br />
            <h3>Tabla del " . $opc . " " . $operan . "</h3>";

            switch ($operan) {
              case '+':
              for ($i=1; $i<=10 ; $i++) {
                echo $opc . " " . $operan . " " . $i . " = " . ($opc + $i) . "<br />";
              }
              break;
              case '-':
              for ($i=1; $i<=10 ; $i++) {
                echo $opc . " " . $operan . " " . $i . " = " . ($opc - $i) . "<br />";
              }
              break;
              case '*':
              for ($i=1; $i<=10 ; $i++) {
                echo $opc . " " . $operan . " " . $i . " = " . ($opc * $i) . "<br />";
              }
              break;
              case '/':
              for ($i=1; $i<=10 ; $i++) {
                echo $opc . " " . $operan . " " . $i . " = " . ($opc / $i) . "<br />";
              }
              echo "</div>";
              break;
            }
          break;
        }

        break;

#main-switch
        case 'Comprobar Números primos':

          echo "<form action=\"\" method=\"post\">
            <h3>Comprobar números primos</h3>

            <table class=\"tableform\">
              <tr>
                <td><p>Introduzca un número:&nbsp&nbsp</p></td>
                <td><p><input type=\"text\" name=\"number\"/></p></td>
              </tr>
            </table>

            <input name=\"menu\" type=\"hidden\" value=\"Comprobar Números primos\">
            <input class=\"send\" type=\"submit\" value=\"Enviar\">
          </form>";

            $numero = (isset($_POST['number']) ? $_POST['number'] : NULL);
            if ($numero==NULL) {
            }

            elseif ($numero <= 1) {
              echo "<p>Operación inválida " . $numero . " menor o igual a 1</p>
              <p>Este Error Aparece ya que un número primo es un número que solo se puede dividir por dos números,
               si mismo y uno, el  1 solo se puede dividir por un número (el 1) y el 0 tampoco cumple esta regla.";
            }

            else {
              if (is_int($numero/2)) {
                $num = ($numero/2);
              } else {
                $num = (($numero/2) + 0.5);
              };
              $test = 0;
              for ($i=2; $i<=$num ; $i++) {
                /*echo $numero . "/" . $i . " = " . ($numero / $i) . "<br/>";*/
                if ($numero%$i==0) {
                  $test = 1;
                  break;
                }
              };
              if ($test == 0) {
                echo "<p>El número " . $numero . " Es primo</p>";
              } else {
                echo "<p>El número " . $numero . " No es primo</p>";
              }

            };

          echo "</div>
        </div>";
        break;


#main-switch
        case 'Encontrar Números primos':
        echo "<form action=\"\" method=\"post\">
          <h3>Encontrar números primos entre</h3>

          <table class=\"tableform\">
            <tr>
              <td><p>Número 1:&nbsp&nbsp</p></td>
              <td><p><input type=\"text\" name=\"num1\"/></p></td>
            </tr>
            <tr>
              <td><p>Número 2:&nbsp&nbsp</p></td>
              <td><p><input type=\"text\" name=\"num2\"/></p></td>
            </tr>
          </table>
          <input name=\"menu\" type=\"hidden\" value=\"Encontrar Números primos\">
          <input class=\"send\" type=\"submit\" value=\"Enviar\">
        </form>";

            $num1 = (isset($_POST['num1']) ? $_POST['num1'] : NULL);
            $num2 = (isset($_POST['num2']) ? $_POST['num2'] : NULL);
            if ($num1==NULL) {
            }

            elseif ($numero <= 1) {
              echo "<p>Operación inválida " . $numero . " menor o igual a 1</p>
              <p>Este Error Aparece ya que un número primo es un número que solo se puede dividir por dos números,
               si mismo y uno, el  1 solo se puede dividir por un número (el 1) y el 0 tampoco cumple esta regla.";
            }

            elseif ($num1 > $num2) {
              echo "<p>Operación inválida " . $num1 . " > ". $num2 . "</p>";
            }

            else {
              $numbers  = array();
              $start = $num1;
              $testex = 0;
              $counter = 0;
              for ($num1=$num1; $num1<=$num2; $num1++) {

                if (is_int($num1/2)) {
                    $num = ($num1/2);
                  } else {
                    $num = (($num1/2) + 0.5);
                  };

                  $test = 0;
                  for ($i=2; $i<=$num ; $i++) {
                    if ($num1%$i==0) {
                      $test = 1;
                      break;
                    }
                  };
                  if ($test == 0) {
                    $numbers[] = $num1;
                    $testex = 1;
                    $counter += 1;
                  }

              }
              if ($testex == 0) {
                echo "<h3>No hay Números Primos entre " . $start . " y " . $num2 . "</h3>";
              }
              else {
                echo "<h3>" . $counter . " Números Primos entre " . $start . " y " . $num2 . ":</h3>";
                foreach ($numbers as $key => $value) {
                  echo "<div class=\"multipl\">" . $value . "<br /></div>";
                }
              }
            };

          echo "</div>
        </div>";
        break;


#main-switch
        case 'Series numéricas':
        echo "<form action=\"\" method=\"post\">
          <h3>Encontrar números primos entre</h3>

          <table class=\"tableform\">
            <tr>
              <td><p>Número 1:&nbsp&nbsp</p></td>
              <td><p><input type=\"text\" name=\"num1\"/></p></td>
            </tr>
            <tr>
              <td><p>Número 2:&nbsp&nbsp</p></td>
              <td><p><input type=\"text\" name=\"num2\"/></p></td>
            </tr>
            <tr>
              <td><p>Intervalo:&nbsp&nbsp</p></td>
              <td><p><input type=\"text\" name=\"aum\"/></p></td>
            </tr>
            <tr>
              <td><p>Columnas:</p></td>
              <td><input class=\"select\" type=\"number\" min=\"1\" max=\"8\" step=\"1\" value=\"5\" name=\"colum\"></td>
            </tr>
          </table>
          <input name=\"menu\" type=\"hidden\" value=\"Series numéricas\">
          <input class=\"send\" type=\"submit\" value=\"Enviar\">
        </form>";

        $num1 = (isset($_POST['num1']) ? $_POST['num1'] : NULL);
        $num2 = (isset($_POST['num2']) ? $_POST['num2'] : NULL);
        $aum = (isset($_POST['aum']) ? $_POST['aum'] : NULL);
        $colum = (isset($_POST['colum']) ? $_POST['colum'] : NULL);
        $test = 0;
        $caum = $num1;
        if ($num1==NULL) {
        }

        elseif ($num1 > $num2) {
          if ($aum < 0) {
            $aum = $aum*(-1);
          }
          echo "<h3>Tabla desde " . $num1 . " hasta " . $num2 . " intervalo " . $aum . "</h3>";
          echo "<table class=\"tableform\">";
            for ($i=$num1; $i >= $num2 ; $i -= ($aum * $colum)) {
              echo "<tr>";
              for ($test=$colum; $test >= 1; $test--) {
                if ($caum < ($num2)) {
                  break;
                }
                else {
                  echo "<td>" . $caum . "<td>";
                  $caum -= $aum;
                }
              }

              echo "</tr>";
            }
          echo "</table>";
        }

        elseif ($aum < 1 ) {
          echo "<p>Operación inválida " . $aum . " < 1</p>";
        }

        else {
          echo "<h3>Tabla desde " . $num1 . " hasta " . $num2 . " intervalo " . $aum . "</h3>";
          echo "<table class=\"tableform\">";
            for ($i=$num1; $i <= $num2 ; $i += ($aum * $colum)) {
              echo "<tr>";
              for ($test=1; $test <= $colum; $test++) {
                if ($caum > ($num2)) {
                  break;
                }
                else {
                  echo "<td>" . $caum . "<td>";
                  $caum += $aum;
                }
              }

              echo "</tr>";
            }
          echo "</table>";
        }

        break;

#main-switch
        };
        ?>
    </div>
  </body>
</html>
