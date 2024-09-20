<?php

echo "<h1>Ejercicio 03</h1>";

/**
 * 1. Se declaren dos variables con valores numéricos superiores a 10
 */

 $num1 = rand(10, 50);
 $num2 = rand(10, 50);

 echo "Número 1: $num1 <br>
        Número 2: $num2 <br><br>";

/**
 * 2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la 
 * primera con un bucle for. 
 */

 echo "<h2>FOR</h2>";

 for ($i = 0; $i < $num1; $i++) {
    if ($i % 2 == 0) {
        echo "$i | ";
    }
 }

 
