<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="2-css.css">
  </head>
  <body>
    <h1>Ejercicio 3:</h1>
    <p>Realiza una copia de los cuatro ejercicios de variables e introduce los datos a través de formularios. Utiliza Fichero css externo para dar estilo a los formularios y utiliza tipos de campos correcto (text, number, etc).</p>
    <div class="formulario">
      <h2>Introduce los datos:</h2>
      <form method="post">
        <label for="pesetas">Pesetas:</label>
        <input type="number" name="pesetas" required><br>
        <br>
        <input type="submit" value="Enviar">
      </form>
    </div>
    <div class="resultado">
      <h2>Resultado:</h2>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $pesetas = htmlspecialchars($_POST["pesetas"]);
          $euros = $pesetas / 166.386;
    
          echo "<p>- $pesetas pesetas son $euros euros</p>";
        }
      ?>
    </div>
  </body>
</html>