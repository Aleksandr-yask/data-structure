<?php
use DataStructures\LinkedList\LinkedList;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$linkedList = new LinkedList();

$linkedList->add('Dima');
$linkedList->add('Petya');
$linkedList->add('Sasha');
$linkedList->add('Vitya');

$linkedList->addUnshift('Tosha');
var_dump($linkedList->getByIndex(1)->value);

var_dump($linkedList->getByIndex(2)->value);
var_dump($linkedList->getByValue('Petya')->value);

var_dump($linkedList->removeByIndex(2)->value); // === var_dump($linkedList->removeByValue('Sasha')->value);

var_dump($linkedList->getByIndex(2)->value);

var_dump($linkedList->indexOf('Tosha'));

