<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 5</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 5:</h1>
  <p>Introduce un número (como máximo 4 cifras). Muestra por pantalla la primera cifra, la última y di si es par o impar. Nota: Formulario utiliza min y max.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="numero">Numero:</label>
      <input type="number" name="numero" min="0" max="9999" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $numero = intval($_POST["numero"]);

          $numeroStr = strval($numero);
          $strLen = strlen("$numeroStr")-1;
          $paridad = ($numero % 2 == 0) 
            ? "par" 
            : "impar";

          echo "<p>Primer cifra: $numeroStr[0]</p>";
          echo "<p>Última cifra: $numeroStr[$strLen]</p>";
          echo "<p>El número es $paridad</p>";
      }
    ?>
  </div>
</body>

</html>