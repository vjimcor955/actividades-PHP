<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
      $pesetas = 10000;
      $euros = $pesetas / 166.386;
    ?>
    <h1>Ejercicio 3:</h1>
    <p>Realiza un conversor de pesetas a euros. La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.</p>
    <?php
      echo "<p>- $pesetas pesetas son $euros euros</p>";
    ?>
  </body>
</html>