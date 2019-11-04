<?php

$animales = [
    "Muffinhead" => 14,
    "Peter" => 4,
    "Monnie" => 7,
    "Banh" => 10
];
echo $animales["Muffinhead"] . PHP_EOL; // Devuelve 14
echo $animales["Monnie"] . PHP_EOL; // Devuelve 7

$animales = array(
    "perro" => "Muffinhead",
    "gato" => "Cuddles"
);
echo $animales[perro] . PHP_EOL; // Notice: Use of undefined constant perro, assumed 'perro'
echo $animales['gato'] . PHP_EOL;

$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nRevisando $i: \n";
    echo "Mal: " . $array['$i'] . "\n"; // Genera Notice: Undefined index
    echo "Bien: " . $array[$i] . "\n";
    echo "Mal: {$array['$i']}\n"; // Genera Notice: Undefined index
    echo "Bien: {$array[$i]}\n";
}

$mi_array = new SplFixedArray(4);

$mi_array[0] = "verde";
$mi_array[1] = "amarillo";

$caf = "cafe";
$coc = "cola";

$mi_array[2] = $caf;
$mi_array[3] = $coc;

list($color1, $color2, $comida1, $comida2) = $mi_array;
var_dump($color1, $color2, $comida1, $comida2);

list($color1, , $comida1, ) = $mi_array;
var_dump($color1, $comida1);



