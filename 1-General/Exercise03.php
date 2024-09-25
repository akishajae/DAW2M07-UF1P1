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

echo "<hr><h2>FOR</h2>";

for ($i = 0; $i <= $num1; $i++) {
    if ($i % 2 == 0) {
        echo "$i | ";
    }
}

/**
 * 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle 
 * while.
 */

echo "<hr><h2>WHILE</h2>";

$a = $num2; //crea una variable con el mismo valor que $num1 para usarlo en el while

while ($a >= 0) {
    echo "$a | ";
    $a--;
}

/**
 * 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle 
 * do/while
 *    a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez 
 *    el valor de la primera variable.
 */

echo "<hr><h2>DO/WHILE</h2>";

$b = $num1; //crea una variable con el mismo valor que $num1 para usarlo en el while

do {
    echo "$b | ";
    $b++;
} while ($b <= $num2); //es posible ser ($b++ <= $num2)
