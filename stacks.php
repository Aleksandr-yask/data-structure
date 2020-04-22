<?php
use DataStructures\Stacks\Stack;

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include __DIR__ . '/' . $class_name . '.php';
});


$stacks = new Stack();

$stacks->push('Anton');
$stacks->push('Vova');
$stacks->push('Jora');


var_dump($stacks->pip()); // Jora

$stacks->pop();

var_dump($stacks->pip()); // Vova