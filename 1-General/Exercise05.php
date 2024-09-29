<?php

echo "<h1>Ejercicio 05</h1>";

/**
 * 1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. 
 * 2. Se repita la operación hasta que el total de valores sumados sea superior a 100. 
 * 3. Muestra la suma de los valores generados. 
 */

$suma = 0;
do {
    $num = rand(0, 20);
    $mostrarSuma = $suma + $num;

    echo ($num < 100) ? "$suma + $num = $mostrarSuma <br>" : $suma;

    $suma += $num;

    /**
     * 4. Muestra el total de números pares e impares generados. 
     */

    if ($num % 2 == 0) {
        $paresCont++;
    } else {
        $imparesCont++;
    }

} while ($suma < 100);

echo "<br> Total pares:  $paresCont";
echo "<br> Total impares: $imparesCont";
