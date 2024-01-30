<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="2-css.css">
  </head>
  <body>
    <h1>Ejercicio 4:</h1>
    <p>Realiza una copia de los cuatro ejercicios de variables e introduce los datos a través de formularios. Utiliza Fichero css externo para dar estilo a los formularios y utiliza tipos de campos correcto (text, number, etc).</p>
    <div class="formulario">
      <h2>Introduce los datos:</h2>
      <form method="post">
          <label for="radio">Radio:</label>
          <input type="number" name="radio" required><br>
          <br>
          <input type="submit" value="Enviar">
      </form>
    </div>
    <div class="resultado">
      <h2>Resultado:</h2>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $radio = htmlspecialchars($_POST["radio"]);
          $area = pi() * pow($radio, 2);
          $longitud = 2 * pi() * $radio;
        
          echo "<p>- Radio circunferencia: $radio</p>";
          echo "<p>- Area circunferencia: $area</p>";
          echo "<p>- Longitud circunferencia: $longitud</p>";
        }
      ?>
    </div>
  </body>
</html>