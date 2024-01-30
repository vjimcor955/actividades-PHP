<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 7</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 7:</h1>
  <p>Haz una tabla HTML donde muestre la tabla de multiplicar del 1 al 10. La tabla tendrá un encabezado (<th></th>)en la primera fila (Tabla 1, Tabla 2,….).</p>
  <div class="resultado">
    <table class="tabla">
      <tr>
        <th>Tabla 1</th>
        <th>Tabla 2</th>
        <th>Tabla 3</th>
        <th>Tabla 4</th>
        <th>Tabla 5</th>
        <th>Tabla 6</th>
        <th>Tabla 7</th>
        <th>Tabla 8</th>
        <th>Tabla 9</th>
        <th>Tabla 10</th>
      </tr>
      <?php
        for ($i = 1; $i <= 10; $i++) {
          echo "<tr>";
          for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </div>
</body>

</html>