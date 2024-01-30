<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="2-css.css">
  </head>
  <body>
    <h1>Ejercicio 1:</h1>
    <p>Realiza una copia de los cuatro ejercicios de variables e introduce los datos a través de formularios. Utiliza Fichero css externo para dar estilo a los formularios y utiliza tipos de campos correcto (text, number, etc).</p>
    <div class="formulario">
      <h2>Introduce tus datos:</h2>
      <form method="post">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" required><br>
          
          <label for="apellidos">Apellidos:</label>
          <input type="text" name="apellidos" required><br>

          <label for="edad">Edad:</label>
          <input type="number" name="edad" required><br>

          <label for="telefono">Nº Teléfono:</label>
          <input type="tel" name="telefono" required><br>

          <label for="direccion">Dirección:</label>
          <input type="text" name="direccion" required><br>
          <br>
          <input type="submit" value="Enviar">
      </form>
    </div>
    <div class="resultado">
      <h2>Resultado:</h2>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nombre = htmlspecialchars($_POST["nombre"]);
          $apellidos = htmlspecialchars($_POST["apellidos"]);
          $direccion = htmlspecialchars($_POST["direccion"]);
          $edad = htmlspecialchars($_POST["edad"]);
          $telefono = htmlspecialchars($_POST["telefono"]);

          echo "- <span style='color:red'>Nombre:</span> $nombre<br/>";
          echo "- <span style='color:red'>Apellidos:</span> $apellidos<br/>";
          echo "- <span style='color:red'>Edad:</span> $edad<br/>";
          echo "- <span style='color:red'>Telefono:</span> $telefono<br/>";
          echo "- <span style='color:red'>Direccion:</span> $direccion<br/>";  
        }
      ?>
    </div>
  </body>
</html>