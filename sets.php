<?php
use DataStructures\Sets\Set;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$set1 = new Set();
$set1->add('a');
$set1->add('b');
$set1->add('c');
$set1->add('d');
$set1->add('e');

$set2 = new Set();
$set2->add('a');
$set2->add('b');
$set2->add('c');
$set2->add('d');
$set2->add('l');

$setJoin = $set1->difference($set2);
var_dump($setJoin->get());

$setJoin = $set1->intersection($set2);
var_dump($setJoin->get());

$setJoin = $set1->union($set2);
var_dump($setJoin->get());

$setJoin = $set1->isSubset($set2);
var_dump($setJoin);
