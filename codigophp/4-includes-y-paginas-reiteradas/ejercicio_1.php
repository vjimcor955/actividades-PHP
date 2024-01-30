<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 1</title>
  <link rel="stylesheet" href="4-css.css">
</head>

<body>
  <h1>Ejercicio 1:</h1>
  <p>Utilizando el ejercicio Web del tema 1, separa la cabera y el menú en un fichero diferente y utiliza Require_once para añadir el código en la página principal y el formulario. Los ficheros html tendrán extensión php.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="hora">Hora (formato 24 horas):</label>
      <input type="number" name="hora" min="0" max="23" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hora = intval($_POST["hora"]);

        if ($hora >= 6 && $hora < 12) {
            $saludo = "Buenos días";
        } elseif ($hora >= 12 && $hora < 21) {
            $saludo = "Buenas tardes";
        } else {
            $saludo = "Buenas noches";
        }

        echo "<p>- $saludo</p>";
    }
    ?>
  </div>
</body>

</html>