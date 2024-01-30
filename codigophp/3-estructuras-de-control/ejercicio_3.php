<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 3</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 3:</h1>
  <p>Pide por teclado 3 notas y calcula la nota media y diga si tiene insuficiente , suficiente, notable o sobresaliente.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="nota_1">Nota 1:</label>
      <input type="number" name="nota_1" required><br>

      <label for="nota_2">Nota 2:</label>
      <input type="number" name="nota_2" required><br>

      <label for="nota_3">Nota 3:</label>
      <input type="number" name="nota_3" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota_1 = floatval($_POST["nota_1"]);
        $nota_2 = floatval($_POST["nota_2"]);
        $nota_3 = floatval($_POST["nota_3"]);

        $nota_media = ($nota_1 + $nota_2 + $nota_3) / 3;

        if ($nota_media < 5) {
          $resultado = "Insuficiente";
        } elseif ($nota_media >= 5 && $nota_media < 7) {
          $resultado = "Suficiente";
        } elseif ($nota_media >= 7 && $nota_media < 9) {
          $resultado = "Notable";
        } else {
          $resultado = "Sobresaliente";
        }

        echo "<p>- Nota media: $nota_media</p>";
        echo "<p>- Tu nota es: $resultado</p>";
      }
    ?>
  </div>
</body>

</html>