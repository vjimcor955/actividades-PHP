<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 6</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 6:</h1>
  <p>Muestra los múltiplos de 5 entre 0 y 100.</p>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      echo "<p>";
      for ($i = 0; $i <= 100; $i += 5) {
          echo "$i ";
      }
      echo "</p>";
    ?>
  </div>
</body>

</html>