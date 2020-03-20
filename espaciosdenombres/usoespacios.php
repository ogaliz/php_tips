<?php
namespace Foo\Bar\subespacio_de_nombres;

const FOO = 1;
function foo() {
    echo 'Hola desde la clase usoespacios';
}

class foo
{
    static function metodo_estatico() {
        echo 'Sumamos una a la constante ' . (FOO + 1);
    }
}
