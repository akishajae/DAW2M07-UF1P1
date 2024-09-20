<?php

echo "<h1>Ejercicio 01</h1>";

/**
 * 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
 * variables y los resultados de sus operaciones
 */

$num1 = rand(1,100);
$num2 = rand(1, 100);

echo "Número 1: $num1 <br>
        Número 2: $num2 <br><br>";

// SUMA
$suma = $num1 + $num2;

// RESTA
$resta = $num1 - $num2;

// DIVISION
$division = $num1 / $num2;

echo "$num1 + $num2 = $suma <br>
        $num1 - $num2 = $resta <br>
        $num1 / $num2 = $division <br><hr>";

/**
 * 2. Muestra cuál es mayor, cuál menor o si son iguales.
 */

 if ($num1 > $num2) {
        echo "$num1 es mayor a $num2. Por ende, $num2 es menor.<hr>";
 } else if ($num1 < $num2) {
        echo "$num2 es mayor a $num1. Por ende, $num1 es menor.<hr>";
 } else {
        echo "$num1 y $num2 son iguales.<hr>";
 }

 /**
  * 3. Si las dos variables son valores superiores a 1, 
  */

  if ($num1 && $num2 > 1) {
        /**
         * a. calcula el área del triángulo con base y altura igual a los valores de las 
         * variables. 
         */

         $areaTriangulo = ($num1 * $num2) / 2;

         echo "Área del triángulo: $areaTriangulo";
  }



