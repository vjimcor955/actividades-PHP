<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 3</title>
  <link rel="stylesheet" href="4-css.css">
</head>

<body>
  <h1>Ejercicio 3:</h1>
  <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="numeros">Numeros (separados por coma):</label>
      <input type="text" name="numeros" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = explode(',', $_POST['numeros']);
        $suma = 0;
        $cont = 0;
  
        foreach ($numeros as $numero) {
          $number = intval($number);
  
          if ($numero < 0) {
            continue;
          }
  
          $suma += $numero;
          $cont++;
        }
        if ($cont > 0) {
            $media = $suma / $cont;
            echo "La media es " . $media;
        } else {
            echo "No positive numbers were entered.";
        }
      }
    ?>
  </div>
</body>

</html>