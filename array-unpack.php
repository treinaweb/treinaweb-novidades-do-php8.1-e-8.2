<?php

$carrosAntigos = [
    'a' => 'Fusca', 
    'b' => 'Brasilia', 
    'c' => 'Variante'
];

$carros = ['Honda City', 'Argos', ...$carrosAntigos];

var_dump($carros);