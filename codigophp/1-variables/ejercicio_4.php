<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
      $radio = 12;
      $area = pi() * pow($radio, 2);
      $longitud = 2 * pi() * $radio;
    ?>
    <h1>Ejercicio 4:</h1>
    <p>Realizar el área y la longitud de la circunferencia utilizando la variable $radio=12. Utiliza la constante pi.</p>
    <?php
      echo "<p>- Radio circunferencia: $radio</p>";
      echo "<p>- Area circunferencia: $area</p>";
      echo "<p>- Longitud circunferencia: $longitud</p>";
    ?>
  </body>
</html>