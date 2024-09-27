<?php

echo "<h1>Ejercicio 04</h1>";

/**
 * 1. Genere un número aleatorio entre el 1 y el 6 para simular la Ɵrada de un dado.
 */

 $dado = rand(1, 6);

 /**
  * 2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara 
  * opuesta. (1:5, 2:6, 3:4)
  */

  echo "Número del dado: $dado ";
  
  // se podría hacer con arrays, pero haré arrays con los siguientes ejercicios
  switch ($dado) {
    case 1:
        $dadoString = "(uno)";
        break;

    case 2:
        $dadoString = "(dos)";
        break;
    
    case 3:
        $dadoString = "(tres)";
        break;
    case 4:
        $dadoString = "(cautro)";
        break;
    case 5:
        $dadoString = "(cinco)";
        break;
    case 6:
        $dadoString = "(seis)";
        break;
    default:
        echo "No número válido.";
        break;
  }

  switch ($dado) {
    case 1:
        $dadoOpuesto = 6;
        break;

    case 2:
        $dadoOpuesto = 5;
        break;
    
    case 3:
        $dadoOpuesto = 4;
        break;
    case 4:
        $dadoOpuesto = 3;
        break;
    case 5:
        $dadoOpuesto = 2;
        break;
    case 6:
        $dadoOpuesto = 1;
        break;
    default:
        echo "No número válido.";
        break;
  }

  echo "$dadoString <br>
        Número opuesto: $dadoOpuesto";
