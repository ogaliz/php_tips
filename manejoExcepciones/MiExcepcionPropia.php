<?php


class MiExcepcionPropia extends Exception
{

}

function hacerAlgo() {
    try {
        // Lanzamos excepci�n InvalidArgumentException
        throw new InvalidArgumentException("Lo est�s haciendo mal", 112);
    } catch(Exception $e) {
        // Lanzamos excepci�n propia, el code lo definimos nosotros,es opcional
        throw new MiExcepcionPropia("Algo ha ocurrido", 911, $e);
    }
}
try {
    hacerAlgo();
} catch(Exception $e) {
    do {
        printf("%s:%d %s (%d) [%s]\n", $e->getFile(), $e->getLine(), $e->getMessage(),
            $e->getCode(), get_class($e));
    } while($e = $e->getPrevious());
}