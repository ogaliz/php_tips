<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

/* Idiomas que va a aceptar nuestro programa */
$idiomas = array(
    'es',
    'cat'
);

$language = '';

// *********** GETTERS AND SETTERS
/*
 * Fijamos el idioma que queramos
 * PARÁMETROS ADMITIDOS : 'es' || 'cat'
 * */
function setIdioma($idioma){

    $esCorrecto = false;

    //Comprobamos que el parámetro que se ha pasado es correcto
    foreach ($GLOBALS['idiomas'] as $item){

        if ($idioma === $item){
            $esCorrecto = true;
            break;
        }
    }

    if ($esCorrecto) {
        return $GLOBALS['language'] = setlocale(LC_TIME, $idioma);
    }else{
        echo "El parámetro de entrada: " . $idioma . " no es correcto, debe ser 'es' o 'cat'";
    }

}

function getIdioma(){
    echo $GLOBALS['language'];
}

// ****************** END GETTERS AND SETTERS

/* Test if Carbon is working */
function testCarbon() {
    return printf('Now: %s', Carbon::now());
}

/* Show date formated as: martes, 19 de noviembre 2019 */
function formattedFechaEs(){
    return Carbon::now()->formatLocalized('%A, %d de %B %Y');
}

/* Show date with day and month uppercase */
function formattedFechaMayusEs(){
    $fecha = formattedFechaEs();

    $pos_mes = strpos($fecha, 'de ') + 3;
    $pos_dia = strpos($fecha, ' de');

    $dia = ucfirst(substr($fecha, 0, $pos_dia));
    $mes = ucfirst(substr($fecha, $pos_mes, strlen($fecha)));

    return $dia . ' ' . $mes;
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testeo de fechas con Carbon</title>
</head>
<body>

<?php
    setIdioma('cat');
    getIdioma();
?>

<!-- <h1>Formateo de fechas con Carbon, prácticas y ejemplos:</h1> -->
<div>
    <div><p><?php echo testCarbon(); ?></p></div>
    <div><p><?php echo formattedFechaEs(); ?></p></div>
    <div><p><?php echo formattedFechaMayusEs(); ?></p></div>
</div>

</body>
</html>