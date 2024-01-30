<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="2-css.css">
  </head>
  <body>
    <h1>Ejercicio 2</h1>
    <div class="formulario">
      <h2>Introduce los datos:</h2>
      <p>Realiza una copia de los cuatro ejercicios de variables e introduce los datos a través de formularios. Utiliza Fichero css externo para dar estilo a los formularios y utiliza tipos de campos correcto (text, number, etc).</p>
      <form method="post">
          <label for="x">Valor de x:</label>
          <input type="number" name="x" required><br>
          
          <label for="y">Valor de y:</label>
          <input type="number" name="y" required><br>
          <br>
          <input type="submit" value="Enviar">
      </form>
    </div>
    <div class="resultado">
      <h2>Resultado:</h2>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $x = htmlspecialchars($_POST["x"]);
          $y = htmlspecialchars($_POST["y"]);
          $suma = $x + $y;
          $resta = $x - $y;
          $division = $x / $y;
          $multiplicacion = $x * $y;
    
          echo "<p>- x: $x</p>";
          echo "<p>- y: $y</p>";
          echo "<p>- Suma: $suma</p>";
          echo "<p>- Resta: $resta</p>";
          echo "<p>- Division: $division</p>";
          echo "<p>- Multiplicacion: $multiplicacion</p>";
        }
      ?>
    </div>
  </body>
</html>