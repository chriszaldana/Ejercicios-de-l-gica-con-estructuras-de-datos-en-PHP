<?php

function frecuenciaCaracteres($cadena) {
    $frecuencia = [];

    // Recorrer cada carácter en la cadena
    $longitud = strlen($cadena);
    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        
        // Si el carácter ya existe en el array de frecuencia, incrementar el contador
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // Si no existe, inicializar el contador en 1
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

// Ejemplo de uso
$texto = "Christian jose zaldaña ramirez";
$resultado = frecuenciaCaracteres($texto);

print_r($resultado);


?>