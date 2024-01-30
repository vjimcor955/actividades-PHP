<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 9</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 9:</h1>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <p>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número primo es aquel que sólo es divisible entre él mismo y la unidad.</p>
    <form method="post">
      <label for="numero">Numero para saber si es primo:</label>
      <input type="number" name="numero" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        function esPrimo($num) {
          if ($num < 2) {
            return false;
          }
          for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
              return false;
            }
          }
          return true;
        }

        echo esPrimo($numero)
          ? "<p>$numero es un número primo.</p>"
          : "<p>$numero no es un número primo.</p>";
      }
    ?>
  </div>
</body>

</html>