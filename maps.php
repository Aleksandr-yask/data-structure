<?php
use DataStructures\Maps\Map;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$map = new Map();

$map->set('Russia', '156.5');
$map->set('USA', '1560.3');
$map->set('England', '350.6');
$map->set('Australia', '230.1');
$map->set('China', '950.8');

var_dump($map->get('Russia'));
