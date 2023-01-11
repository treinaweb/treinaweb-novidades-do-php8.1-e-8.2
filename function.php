<?php

function soma($a, $b){
    return $a + $b;
};

$soma = soma(...);

echo $soma(1, 3);
echo "<br>";

var_dump($soma);