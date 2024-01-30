<!DOCTYPE html>
<html lang=”es”>

<head>
  <meta charset="utf-8">
  <title>Biblioteca</title>
  <link rel="stylesheet" href="5css.css">
</head>

<body>
  <h1>Biblioteca:</h1>
  <p> Crea una biblioteca de funciones matemáticas que contenga las siguientes funciones. Recuerda que puedes usar unas dentro de otras si es necesario.</p>
  <div class="formulario">
    <h2>Introduce los datos:</h2>
    <form method="post">
      <label for="decimal">Decimal:</label>
      <input type="number" name="decimal" required><br>
      <label for="binario">Binario:</label>
      <input type="number" name="binario" required><br>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <?php
    function esCapicua($num) {
        return strrev($num) == $num;
    }

    function esPrimo($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function siguientePrimo($num) {
        $num++;
        while (!esPrimo($num)) {
            $num++;
        }
        return $num;
    }

    function potencia($base, $exp) {
        return pow($base, $exp);
    }

    function digitos($num) {
        return strlen((string)$num);
    }

    function voltea($num) {
        return strrev($num);
    }

    function digitoN($num, $n) {
        return strval($num)[$n];
    }

    function posicionDeDigito($num, $digito) {
        $pos = strpos(strval($num), strval($digito));
        return $pos === false ? -1 : $pos;
    }

    function quitaPorDetras($num, $n) {
        return substr($num, 0, -$n);
    }

    function quitaPorDelante($num, $n) {
        return substr($num, $n);
    }

    function pegaPorDetras($num, $digito) {
        return $num . $digito;
    }

    function pegaPorDelante($num, $digito) {
        return $digito . $num;
    }

    function trozoDeNumero($num, $inicio, $fin) {
        return substr($num, $inicio, $fin - $inicio);
    }

    function juntaNumeros($num1, $num2) {
        return $num1 . $num2;
    }
  ?>
  <div class="ejercicios">
    <div class="resultado">
      <h2>Ejercicio 1:</h2>
      <?php
        echo "<p>Muestra los números primos que hay entre 1 y 1000.</p>";
        for ($i = 1; $i <= 1000; $i++) {
          if (esPrimo($i)) {
              echo $i . ", ";
          }
        }
      ?>
    </div>
    <div class="resultado">
    <h2>Ejercicio 2:</h2>
      <?php
        echo "<p>Muestra los números capicúa que hay entre 1 y 99999.</p>";
        for ($i = 1; $i <= 99999; $i++) {
          if (esCapicua($i)) {
              echo $i . ", ";
          }
        }    
      ?>
    </div>
    <div class="resultado">
    <h2>Ejercicio 3:</h2>
      <?php
        echo "<p>Escribe un programa que pase de binario a decimal.</p>";
        $binario = $_POST['binario'];
        $decimal = bindec($binario);
        echo "El número binario $binario en decimal es $decimal.<br><br>";  
      ?>
    </div>
    <div class="resultado">
    <h2>Ejercicio 4:</h2>
      <?php
        echo "<p>Escribe un programa que pase de decimal a binario.</p>";
        $decimal = $_POST['decimal'];
        $binario = decbin($decimal);
        echo "El número decimal $decimal en binario es $binario.<br><br>";
      ?>
    </div>
  </div>
</body>

</html>