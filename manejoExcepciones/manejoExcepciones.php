<?php
/**
 * Lanza una excepción por defecto
 */

$miLado = -3;
function areaCuadrado($lado){

    if ($lado < 0){
        // Lanzamos una excepción
        throw new Exception ('Debes insertar un número positivo');
    }
    return $lado * $lado;
}

try {
    areaCuadrado($miLado);
} catch (Exception $e) {
    print 'Ha saltado la excepción: ' . $e->getMessage();
}
// Devuelve: Uncaught exception 'Exception' with message 'Debes insertar un número positivo'