<?php
use DataStructures\Queues\Queue;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$queue = new Queue();

$queue->enqueue('Vova');
$queue->enqueue('Dima');
$queue->enqueue('Sasha');

var_dump($queue->get());

$queue->dequeue();

var_dump($queue->get());