<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="3-css.css">
</head>

<body>
  <h1>Ejercicio 2:</h1>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <p>Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41,se pagan a 16 euros la hora</p>
    <form method="post">
      <label for="horas">Horas trabajadas:</label>
      <input type="number" name="horas" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <div class="resultado">
    <h2>Resultado:</h2>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $horas_trabajadas = intval($_POST["horas"]);

        $salario = 0;
        $horas = min($horas_trabajadas, 40);
        $horas_extra = max($horas_trabajadas - 40, 0);

        $salario += $horas * 12;
        $salario += $horas_extra * 16;

        echo "<p>- Horas trabajadas: $horas_trabajadas</p>";
        echo "<p>- Salario semanal: $salario euros</p>";
      }
    ?>
  </div>
</body>

</html>