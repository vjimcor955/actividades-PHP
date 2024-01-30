<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 1</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 1:</h1>
  <p>Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.</p>
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