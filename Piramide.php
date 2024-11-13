<?php

function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }

        // Imprimir asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }

        // Nueva línea después de cada fila
        echo "\n";
    }
}

// Ejemplo de uso
$altura = 10;
imprimirPiramide($altura);


?>