<?php

class Pessoa
{
    public function __construct(
        public readonly string $nome
    )
    {}
}

$joao = new Pessoa('João Pessoa');
echo $joao->nome;