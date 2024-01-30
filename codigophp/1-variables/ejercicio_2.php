<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
      $x = 144;
      $y = 999;
      $suma = $x + $y;
      $resta = $x - $y;
      $division = $x / $y;
      $multiplicacion = $x * $y;
    ?>
    <h1>Ejercicio 2:</h1>
    <p>Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.</p>
    <?php
      echo "<p>- x: $x</p>";
      echo "<p>- y: $y</p>";
      echo "<p>- Suma: $suma</p>";
      echo "<p>- Resta: $resta</p>";
      echo "<p>- Division: $division</p>";
      echo "<p>- Multiplicacion: $multiplicacion</p>";
    ?>
  </body>
</html>