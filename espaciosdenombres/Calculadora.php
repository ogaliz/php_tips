<?php
use Foo\Bar\subespacio_de_nombres;
use Foo\Bar\subespacio_de_nombres as devtest;
include 'usoespacios.php';

const FOO = 2;
function foo() {
    echo 'Hola desde la calculadora';
}
class Calculadora
{
    static function metodo_estatico() {
        echo 'El metodo estático de la calculadora<br>';
    }
}

echo 'Llamada al método del fichero local<br>';
foo();
echo '<br><br>';
Calculadora::metodo_estatico();

echo '<br><br><br>';

echo 'Llamada a un método del fichero usoespacios<br>';
Foo\Bar\subespacio_de_nombres\foo();

echo '<br><br><br>';

// Instanciamos la clase desde espacio de nombres
$claseUsoespacios = new subespacio_de_nombres\foo;

$claseUsoespacios::metodo_estatico();

echo '<br><br><br>';

// Lamada a una constatne desde espacio de nombres
$dev = subespacio_de_nombres\FOO;
echo $dev . ' Constante fichero local: ' . FOO;

echo '<br><br><br>';

echo 'Llamada a la constante desde un alias de espacio de nombres ' . devtest\FOO;
