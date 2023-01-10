<?php

function dd(...$params): never
{
    var_dump(...$params);
    exit;
}

$nome = 'João';
dd($nome, 'teste');

echo "Estou depois do DD";