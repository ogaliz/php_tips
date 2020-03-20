<?php


class Monticulos extends SplHeap
{

    protected function compare($value1, $value2)
    {
        $valores1 = array_values($value1);
        $valores2 = array_values($value2);

        if ($valores1[0] === $valores2[0])
            return 0;

        return $valores1[0] < $valores2[0] ? -1 : 1;
    }

}

// Añadimos los datos a nuestro Heap
$heap = new Monticulos();

$heap->insert(array('AA Gent' => 15));
$heap->insert(array('Anderlecht' => 20));
$heap->insert(array('Cercle Brugge' => 11));
$heap->insert(array('Charleroi' => 12));
$heap->insert(array('Club Brugge' => 21));
$heap->insert(array('G. Beerschot' => 15));
$heap->insert(array('Kortrijk' => 10));
$heap->insert(array('KV Mechelen' => 18));
$heap->insert(array('Lokeren' => 10));
$heap->insert(array('Moeskroen' => 7));
$heap->insert(array('Racing Genk' => 11));
$heap->insert(array('Roeselare' => 6));
$heap->insert(array('Standard' => 20));
$heap->insert(array('STVV' => 17));
$heap->insert(array('Westerlo' => 10));
$heap->insert(array('Zulte Waregem' => 15));

var_dump($heap->current());

// Mostramos el ranking, nos desplazamos al primero:
$heap->top();
var_dump($heap->current());

$arreglo = $heap->current();

echo $arreglo[0];

$cuenta = strlen('AMNIOCEN.PRECOZaaaaa');
echo $cuenta;
//while ($heap->valid()){
//
//    list($equipo, $puntuacion) = $heap->current();
//
//    echo "El equipo: " . $equipo . " marcó: " . $puntuacion . "puntos.";
//
//    $heap->next();
//}




