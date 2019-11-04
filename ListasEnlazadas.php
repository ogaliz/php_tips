<?php
// FIFO and LIFO in SplDoublyLinkedList
$mi_lista = new SplDoublyLinkedList();

$mi_lista->push('a');
$mi_lista->push('b');
$mi_lista->push('c');
$mi_lista->push('d');

echo "FIFO (First In First Out) :\n";

$mi_lista->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

for ($mi_lista->rewind(); $mi_lista->valid(); $mi_lista->next()) {
    echo $mi_lista->current() . "\n";
    var_dump($mi_lista->current());
}

$mi_lista->rewind();

foreach ($mi_lista as $letra) {

    var_dump($mi_lista->current());
}

// FIFO (First In First Out):
// a
// b
// c
// d

//echo "LIFO (Last In First Out) :\n";
//$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
//for ($list->rewind(); $list->valid(); $list->next()) {
//    echo $list->current()."\n";
//}

// LIFO (Last In First Out):
// d
// c
// b
// a