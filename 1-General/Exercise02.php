<?php

echo "<h1>Ejercicio 02</h1>";

/**
 * 1. Se declara una variable con un valor numérico. 
 */

 $dia = rand(1, 10);
 echo "Número: $dia <br><br>";

 /**
  * Utlizando una estructura switch/case 
  * genera un mensaje que indique a qué día de la semana se corresponde. 
  */

  switch ($dia) {
    case 1:
        echo "Hoy es lunes.";
        break;
    case 2:
        echo "Hoy es martes.";
        break;
    case 3:
        echo "Hoy es miércoles.";
        break;
    case 4:
        echo "Hoy es jueves.";
        break;
    case 5:
        echo "Hoy es viernes.";
        break;
    case 6:
        echo "Hoy es sábado.";
        break;
    case 7:
        echo "Hoy es domingo.";
        break;
    /**
     * a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde 
     * con ningún día. 
     */
    default:
        echo "No es ningún día de la semana.";
  }
