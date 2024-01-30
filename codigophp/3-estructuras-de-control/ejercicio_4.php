<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 4</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 4:</h1>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <p>Escribe un programa que ordene 3 número introducido por teclado.</p>
    <form method="post">
      <label for="numero_1">Numero 1:</label>
      <input type="number" name="numero_1" required><br>

      <label for="numero_2">Numero 2:</label>
      <input type="number" name="numero_2" required><br>

      <label for="numero_3">Numero 3:</label>
      <input type="number" name="numero_3" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero_1 = floatval($_POST["numero_1"]);
        $numero_2 = floatval($_POST["numero_2"]);
        $numero_3 = floatval($_POST["numero_3"]);

        $lista_numeros = [$numero_1, $numero_2, $numero_3];
        sort($lista_numeros);

        echo "<p>Primer numero: $lista_numeros[0]</p>";
        echo "<p>Segundo numero: $lista_numeros[1]</p>";
        echo "<p>Tercer numero: $lista_numeros[2]</p>";
      }
    ?>
  </div>
</body>

</html>