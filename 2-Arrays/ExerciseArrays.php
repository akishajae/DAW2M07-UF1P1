<?php

/**
 * 1. Crea un array asociativo con los siguientes datos y claves.
 * nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
 */
echo "<h1>Ejercicio 01</h1>";

$personas = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");

/**Muestra los valores del array anterior uƟlizando foreach.*/
$i = 1;
foreach ($personas as $value) {
    echo "dato " . $i . "º: $value <br>";
    $i++;
}

/**
 * 2. Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando foreach. 
 */

echo "<h1>Ejercicio 02</h1>";

foreach ($personas as $key => $value) {
    echo "$key: $value <br>";
}

/**
 * 3. Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
 */

 echo "<h1>Ejercicio 03</h1>";

$personas["edad"] = 24;

$i = 1;
foreach ($personas as $value) {
    echo "dato $i" . "º: $value <br>";
    $i++;
}

/**
 * 4. Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump.
 */

echo "<h1>Ejercicio 04</h1>";

unset($personas["ciudad"]);
var_dump($personas);

/**
 * 5. Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
 * $letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
 * información en orden descendente
 */

echo "<h1>Ejercicio 05</h1>";

$letters = "a,b,c,d,e,f";
$letter = explode(",", $letters);

$i = count($letter);
foreach (array_reverse($letter) as $value) {
    echo "letter $i" . " º: $value <br>";
    $i--;
}

/**
 * 6. Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
 * las siguientes:
 * Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
 * Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
 * mayor a menor.
 */

echo "<h1>Ejercicio 06</h1>";

$clase = array(
    "Miguel" => 5, 
    "Luís" => 7, 
    "Marta" => 10, 
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

array_multisort($clase, SORT_DESC, SORT_NUMERIC);

echo "Notas de los estudiantes: ";

foreach ($clase as $alumni => $nota) {
    echo "$alumni: $nota ";
}

/**
 * 7. Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
 * nombres de los alumnos cuya nota esté por encima de la media. 
 */

echo "<h1>Ejercicio 07</h1>";

function calculateAvg($array) {
    return number_format(array_sum($array) / count($array), 2, ',', '.');
}

$media = calculateAvg($clase);

echo "Media de las notas: $media <br>";

echo "Alumnos con nota por encima de la media: <br>";
foreach ($clase as $alumni => $nota) {
    if ($nota > $media) {
        echo "$alumni <br>";
    }
}

/**
 * 8. Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
 * el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del array. 
 */

echo "<h1>Ejercicio 08</h1>";

//si hay alumnos que han obtenido la misma nota máxima
//$topAlumni = array_keys($clase, max($clase)); --> pero no funciona

$topAlumni = array_search(max($clase),$clase);
echo "La nota más alta es " . max($clase) . " y el/la mejor alumni es " . $topAlumni;
