<?php

function soma($a, $b): null|false|int
{
    if ($a == 0 && $b == 0) {
        return null;
    }

    if ($a == 0 || $b == 0) {
        return false;
    }

    return $a + $b;
}

var_dump(soma(0, 0));