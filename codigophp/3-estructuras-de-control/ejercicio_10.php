<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 10</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 10:</h1>
  <p> Introduce dos número por teclado e imprime los número impares que hay entre ellos. Controla que el primer número sea menor que el segundo.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="numero_1">Numero 1:</label>
      <input type="number" name="numero_1" required><br>

      <label for="numero_2">Numero 2:</label>
      <input type="number" name="numero_2" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero_1"]);
        $numero2 = intval($_POST["numero_2"]);

        if ($numero1 < $numero2) {
          echo "<p>";
          for ($i = $numero1; $i <= $numero2; $i++) {
            if ($i % 2 != 0) {
              echo "$i ";
            }
          }
          echo "</p>";
        } else {
          echo "<p>El primer número debe ser menor que el segundo.</p>";
        }
      }
    ?>
  </div>
</body>

</html>