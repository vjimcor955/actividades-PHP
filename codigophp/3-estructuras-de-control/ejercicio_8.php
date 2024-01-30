<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 8</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 8:</h1>
  <p>Escribe un programaquemuestrelos n primerostérminos delaserie deFibonacci. El primer término de la serie de Fibonacci es 0, elsegundo es 1 y elresto se calcula sumando los dos anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe introducir por teclado.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="numeros">Numero de términos de la serie de Fibonacci:</label>
      <input type="number" name="numeros" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $numeros = intval($_POST["numeros"]);

          $fibonacci = [];
          $fibonacci[0] = 0;
          $fibonacci[1] = 1;

          for ($i = 2; $i < $numeros; $i++) {
              $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
          }
          
          echo "<p>";
          foreach ($fibonacci as $valor) {
              echo "$valor ";
          }
          echo "</p>";
      }
    ?>
  </div>
</body>

</html>