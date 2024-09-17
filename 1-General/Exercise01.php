<?php

/**
 * 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
 * variables y los resultados de sus operaciones
 */

$num1 = rand(1,100);
$num2 = rand(1, 100);

echo "Número 1: $num1 <br>
        Número 2: $num2 <br><br>";

// SUMA
$addition = $num1 + $num2;

// RESTA
$substraction = $num1 - $num2;

// DIVISION
$division = $num1 / $num2;

echo "$num1 + $num2 = $addition <br>
        $num1 - $num2 = $substraction <br>
        $num1 / $num2 = $division <br>";

