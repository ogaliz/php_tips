<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

/* Fechas en Español */
setlocale(LC_TIME, 'es');

/* Fechas en Catalán */
//setlocale(LC_TIME, 'cat');

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
    $pos_dia = strpos($fecha, ' de') + 3;

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

<h1>Formateo de fechas con Carbon, prácticas y ejemplos:</h1>
<div>
    <div><p><?php echo testCarbon(); ?></p></div>
    <div><p><?php echo formattedFechaEs(); ?></p></div>
    <div><p><?php echo formattedFechaMayusEs(); ?></p></div>
</div>

</body>
</html>