<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="4-css.css">
</head>

<body>
  <h1>Ejercicio 2:</h1>
  <p>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
    <label for="combinacion">Combinación:</label>
      <input type="number" name="combinacion" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      session_start();

      $combinacion_correcta = 1234;
      $intentos_maximos = 4;

      if (!isset($_SESSION["intentos"])) {
        $_SESSION["intentos"] = $intentos_maximos;
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $combinacion = intval($_POST["combinacion"]);

        if ($combinacion == $combinacion_correcta) {
          echo "<p>La caja fuerte se ha abierto satisfactoriamente.</p>";
          $_SESSION["intentos"] = $intentos_maximos;
        } else {
          $_SESSION["intentos"]--;

          if ($_SESSION["intentos"] > 0) {
            echo "<p>Lo siento, esa no es la combinación. Quedan " . $_SESSION["intentos"] . " intentos.</p>";
          } else {
            echo "<p>Lo siento, esa no es la combinación. Has agotado todos los intentos.</p>";
            $_SESSION["intentos"] = $intentos_maximos;
          }
        }
      }
    ?>
  </div>
</body>

</html>