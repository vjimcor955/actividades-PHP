<!DOCTYPE html>
<html lang=”es”>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
      $nombre = "Victor";
      $apellidos = "Jimenez Corada";
      $edad = 21;
      $telefono = 123456789;
      $direccion = "Direccion";
      ?>
    <h1>Ejercicio 1:</h1>
    <p>Escribe un programa que muestre tus datos personales por pantalla (nombre, apellidos, dirección, edad , nº teléfono, dirección). Cada dato tendrá que estar almacenado en una variable. Utiliza la etiqueta Style para darle estilo.</p>
    <?php
      echo "- <span style='color:red'>Nombre:</span> $nombre<br/>";
      echo "- <span style='color:red'>Apellidos:</span> $apellidos<br/>";
      echo "- <span style='color:red'>Edad:</span> $edad<br/>";
      echo "- <span style='color:red'>Telefono:</span> $telefono<br/>";
      echo "- <span style='color:red'>Direccion:</span> $direccion<br/>";
    ?>
  </body>
</html>