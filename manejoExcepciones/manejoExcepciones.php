<?php


$miLado = -3;
function areaCuadrado($lado){

    if ($lado < 0){
        // Lanzamos una excepci�n
        throw new Exception ('Debes insertar un n�mero positivo');
    }
    return $lado * $lado;
}

try {
    areaCuadrado($miLado);
} catch (Exception $e) {
    print 'Ha saltado la excepci�n: ' . $e->getMessage();
}
// Devuelve: Uncaught exception 'Exception' with message 'Debes insertar un n�mero positivo'